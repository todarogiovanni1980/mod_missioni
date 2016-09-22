<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>

<ul>
    <?php foreach ($items as $item) { ?>
    <li>
    	<img
		src="administrator/images/<?php echo ( $item->rimborso ) ? 'tick.png' : ( $item->rimborso != 1 ? 'publish_x.png' : 'disabled.png' );?>"
		width="16" height="16" border="0"
		alt="<?php echo ( $item->rimborso ) ? JText::_( "Rimborsata " . $item->rimborso ) : JText::_( 'Non lavorata' );?>" /> 
        <img
		src="administrator/images/<?php echo ( $item->protocollo ) ? 'tick.png' : ( $item->protocollo != 1 ? 'publish_x.png' : 'disabled.png' );?>"
		width="16" height="16" border="0"
		alt="<?php echo ( $item->protocollo ) ? JText::_( "Protocollo numero " . $item->protocollo ) : JText::_( 'Non Protocollata' );?>" /> 
	<img
		src="administrator/images/<?php echo ( $item->filemissionefirmata ) ? 'edit_f2.png' : ( $item->filemissionefirmata != 1 ? 'edit.png' : 'edit.png' );?>"
		width="16" height="16" border="0"
		alt="<?php echo ( $item->filemissionefirmata ) ? JText::_( "Firmata " . $item->filemissionefirmata ) : JText::_( 'da firmare' );?>" />
	
	<?php echo $item->numero ." del ". $item->data ; ?>
    </li>
    <?php } ?>
</ul>
