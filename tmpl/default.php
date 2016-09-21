<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>

<ul>
    <?php foreach ($items as $item) { ?>
    <li>
        <?php echo $item->numero ." del ". $item->data ; ?>
    </li>
    <?php } ?>
</ul>
