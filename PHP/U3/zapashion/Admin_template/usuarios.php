<?php
	include "menu.php";
	include('check_active_session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zapashion</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/blitzer/jquery-ui.css">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
$(function() {
	$("#dialog1").dialog({
		autoOpen: false,
		modal: true,
		draggable: false,
		resizable: false,
		dialogClass: 'ui-dialog-osx',
	});
});

$(document).ready(function(){

	$("table").on("click", ".botonrellenar", function() {
		var rellenar = $(this).parent().prev().children().html();
		$("#marcaeditar").val(rellenar);
		$("#dialog1").dialog("open");
	});

});
</script>

</head>

<body>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tables</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Usuarios</h1>
			</div>
		</div><!--/.row-->


		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
				<div class="panel-body">
					<table data-toggle="table">
							<thead>
							<tr>
									<th data-field="id">ID</th>
									<th data-field="name">User</th>
									<th data-field="price">Name</th>
									<th data-field="price">Lastname</th>
									<th data-field="price">Password</th>
							</tr>
							</thead>
							<tbody>
								<?php
								$tableUser = "SELECT * FROM usuarios";
								$userQuery = mysqli_query($connection, $tableUser);
								while ($row = mysqli_fetch_array($userQuery)) {
									?>
									<tr>
										<td><?php echo $row['id_usuario']; ?></td>
										<td><?php echo $row['usuario']; ?></td>
										<td><?php echo $row['nombre']; ?></td>
										<td><?php echo $row['apellido']; ?></td>
										<td><?php echo $row['password']; ?></td>
										<td>
											<button class="btn btn-warning botonrellenar" type="button" name="button">Modify</button>
											<button class="btn btn-danger" type="button" name="button">Delete</button>
										</td>
									</tr>
									<?php } ?>

							</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="dialog1" title="Editar Marca" class="hidden">
      <h3>Editar Marca</h3>
      <form action="" method="post">
        <input type="text" class="form-control" id="marcaeditar" name="marcaeditar" placeholder="Genero">
				<input type="text" class="form-control" id="marcaeditar" name="marcaeditar" placeholder="Genero">
				<input type="text" class="form-control" id="marcaeditar" name="marcaeditar" placeholder="Genero">
        <input type="submit" name="editarmarca" class="btn btn-default" value="Enviar">
      </form>
 		</div>

	</div><!--/.main-->

	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>

</body>

</html>
