<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModMissioniHelper
{
    /**
     * Returns a list of missions items
    */
    public function getItems($missionsCount)
    {
        // get a reference to the database
        $db = &JFactory::getDBO();
 
        // get a list of $userCount randomly ordered users 
        $query = 'SELECT a.numero, a.data, a.filemissionefirmata, a.protocollo FROM `presenzeitd.missioni` AS a ORDER BY rand() LIMIT ' . $missionsCount  . '';
 
        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
 
        return $items;
    } //end getItems
 
} 
?>
