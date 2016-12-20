<?php

	require('languages.php');

	$_SESSION['multilenguaje'];
	if ( isset($_SESSION['multilenguaje']) ){
		$lang = $_SESSION['multilenguaje'];
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
					<form action="<?php $_SERVER["PHP_SHELF"];?>" method="post">
						<input type="button" name="spain" value="Spain">
						<input type="button" name="ingles" value="Ingles">
					</form>

					<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if(isset($_POST["spain"])){
							$_SESSION['multilenguaje'] = es ;
						}
						else {
						$_SESSION['multilenguaje'] = en ;
						}
					}
					 ?>
</body>
</html>
