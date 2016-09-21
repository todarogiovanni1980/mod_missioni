<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

// get a parameter from the module's configuration
$missionsCount = $params->get('missionscount');
?>

<p>
    Visualizza le Ultime <?php echo $missionsCount; ?> Missioni secondo le impostazioni del modulo.
</p>
