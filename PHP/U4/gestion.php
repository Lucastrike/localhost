<?php
//conexion
include('connection.php');
//recoger por GET o POST la tabla -> $tabla=$_POST['tabla'];
$tabla="ciclos";

//mostrar las tablas de la BD para hacer el menú
$menu = "show tables;";
$resultado = mysqli_query($connection, $menu);

//mostrar todo de la tabla
$sql = "select * from ".$tabla.";";
$resultado2 = mysqli_query($connection, $sql);

//mostrar los nombre de los campos de la tabla
$sql2 = "describe ".$tabla.";";
$resultado3 = mysqli_query($connection, $sql2); ?>

<html>
	<body>
		<ul>

			<?php
			while ($fila = mysqli_fetch_array($resultado)){
				echo "<li><a href='mostrar.php?name=".$fila[0]."'>".$fila[0]."</a></li>";
			}
			?>

		</ul>
		<!--Enlace para ir a insertar en la tabla-->
		<a href="insertar.php?nombre=<?php echo $tabla;?>">Insertar</a>
		<table border='2'>
			<tr>
			<?php

			//recorrer los nombres de los campos de la tabla
			while ($field = mysqli_fetch_array($resultado3)){
				?>
				<td><?php echo $field[0];?></td>

			<?php
			}
			?>
			</tr>
			<?php
			while ($fila = mysqli_fetch_array($resultado2)){
				echo "<tr>
					<td>".$fila[0]."</td>
					<td>".$fila[1]."</td>
					<td>".$fila[2]."</td>
					<td><a href='modificar.php?nombre=".$tabla."&campo=".$fila[0]."'>Editar</a></td>
					<td><a href='eliminar.php?nombre=".$tabla."&campo=".$fila[0]."'>Eliminar</a></td>
				</tr>";
			}
			?>

		</table>

<?php
mysqli_close($connection);


?>
