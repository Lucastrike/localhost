<?php
	require('languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
            <ul class="nav">
            <li class="dropdown active">
                <a href="#"><?php echo __('Inicio', $lang) ?></</a>
			</li>
           <li><a href="#"><?php echo __('Eventos', $lang) ?></</a></li>
           <li><a href="#"><?php echo __('Informacion', $lang) ?></</a></li>
           <li><a href="#"><?php echo __('Contacto', $lang) ?></</a></li>
            </ul> 
</body>
</html>
