<?php
utf8_encode();

$campos = 0;

//conexion
include('includes/conexion.php');
//recoger por GET o POST la tabla -> $tabla=$_POST['tabla'];
if(isset($_GET["name"]))
{
	$tabla=$_GET["name"];
}

//mostrar las tablas de la BD para hacer el menú
$menu = "show tables;";
$resultado = mysqli_query($conexion, $menu);

//mostrar todo de la tabla
$sql = "select * from ".$tabla.";";
$resultado2 = mysqli_query($conexion, $sql);

//mostrar los nombre de los campos de la tabla
$sql2 = "describe ".$tabla.";";
$resultado3 = mysqli_query($conexion, $sql2);
?>

<html>
	<body>
		<head>
			<meta charset="utf-8">
			<title>Base de datos dinámica</title>
		</head>
		<ul>

			<?php
			while ($fila = mysqli_fetch_array($resultado))
			{
				echo utf8_encode("<li><a href='gestion.php?name=".$fila[0]."'>".$fila[0]."</a></li>");
			}
			?>

		</ul>
		<!--Enlace para ir a insertar en la tabla-->
		<a href="includes/insertar.php?nombre=<?php echo $tabla;?>">Insertar</a>
		<table border='2'>
			<tr>
			<?php

					//recorrer los nombres de los campos de la tabla
					while ($field = mysqli_fetch_array($resultado3))
					{
			?>
						<td><?php echo $field[0];?></td>
					<?php
					$campos++;
					}
					echo ("<td>Editar</td>");
					echo ("<td>Eliminar</td>");
					?>
			</tr>
			<?php
			while ($fila = mysqli_fetch_array($resultado2))
			{
					echo "<tr>";
				for ($i = 0; $i<$campos; $i++)
					{
							echo utf8_encode("<td>".$fila[$i]."</td>");
					}
					echo "<td><a href='modificar.php?nombre=".$tabla."&campo=".$fila[0]."'>Editar</a></td>
					<td><a href='eliminar.php?nombre=".$tabla."&campo=".$fila[0]."'>Eliminar</a></td>
				</tr>";
			}
			?>
		</table>

<?php
mysqli_close($conexion);
?>
	</body>
</html>
