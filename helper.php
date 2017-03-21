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
        if ($data) $filtrodata = " a.data>='$data'"; 
        if ($filtro) $filtro = "where ($filtro) and ($filtrodata) ";
        
        // get a reference to the database
        $db = &JFactory::getDBO();
 
        // get a list of $userCount randomly ordered users 
        $query = "SELECT a.numero, a.data, a.filemissionefirmata, a.protocollo, a.rimborso, a.idmissione FROM #__presenze_missioni AS a $filtro ORDER BY a.data  LIMIT $missionsCount "; 
        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
 
        return $items;
    } //end getItems
 
} 
?>
