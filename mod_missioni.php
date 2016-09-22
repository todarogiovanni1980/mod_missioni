<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// get a parameter from the module's configuration
$missionsCount = $params->get('missionscount');
$firmare = $params->get('firmare');
$rimborsare = $params->get('rimborsare');
$protocollare = $params->get('protocollare');
$data = $params->get('data');

// include the helper file
require_once(dirname(__FILE__).DS.'helper.php');

// get the items to display from the helper
$items = ModMissioniHelper::getItems($missionsCount,$protocollare,$firmare,$rimborsare,$data);

// include the template for display
require(JModuleHelper::getLayoutPath('mod_missioni'));

?>

