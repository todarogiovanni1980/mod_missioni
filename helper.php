<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModMissioniHelper
{
    /**
     * Returns a list of missions items
    */
    public function getItems($missionsCount, $protocollare, $firmare, $rimborsare, $data)
    {
        // Prepare the WHERE clause
        $where = array();
        if ($protocollare) $where[] = " a.protocollo IS NULL ";
        if ($firmare) $where[] = " a.filemissionefirmata IS NULL ";
        if ($rimborsare) $where[] = " a.rimborso IS NULL ";
        $filtro =   (count($where)) ? ' WHERE ('.implode(' OR ', $where).')'  : '';
        if ($data && $filtro) $filtro .= " and a.data>='$data' ";

        // get a reference to the database
        $db = &JFactory::getDBO();
 
        // get a list of items 
        $query = "SELECT * FROM #__presenze_missioni AS a $filtro ORDER BY a.data  LIMIT $missionsCount "; 
        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
 
        return $items;
    } //end getItems
 
} 
?>
