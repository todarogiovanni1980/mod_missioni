<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// get a parameter from the module's configuration
$missionsCount = $params->get('missionscount');

// include the helper file
require_once(dirname(__FILE__).DS.'helper.php');

// get the items to display from the helper
$items = ModMissioniHelper::getItems($missionsCount);

// include the template for display
require(JModuleHelper::getLayoutPath('mod_missioni'));

?>

