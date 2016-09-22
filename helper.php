<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModMissioniHelper
{
    /**
     * Returns a list of missions items
    */
    public function getItems($missionsCount, $protocollare, $firmare, $rimborsare, $data)
    {
        $filtro = "";
        
        if ($protocollare) $filtro .= " a.protocollo=''";
        if ($firmare) $filtro .= " or a.filemissionefirmata=''";
        if ($rimborsare) $filtro .= " or a.rimborso=''";
        if ($data) $filtro .= " or a.data>=$data";
        if ($filtro) $filtro = "where $filtro";
        
        // get a reference to the database
        $db = &JFactory::getDBO();
 
        // get a list of $userCount randomly ordered users 
        $query = "SELECT a.numero, a.data, a.filemissionefirmata, a.protocollo, a.rimborso FROM presenzeitd.missioni AS a $filtro ORDER BY a.data DESC LIMIT $missionsCount "; 
        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
 
        return $items;
    } //end getItems
 
} 
?>
