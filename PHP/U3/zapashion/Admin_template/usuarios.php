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
<!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/blitzer/jquery-ui.css">-->

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">

$(document).ready(function(){
	console.log("ejecuta");

	$("table").on("click", ".botonrellenar", function() {
		console.log("entra");
		var rellenar = $(this).parent().prev().children().html();
		console.log(rellenar);
		$("#marcaeditar").val(rellenar);

		var lastName = $(this).parent().prev().html();
		$("#editLast").val(lastName);

		var pass = $(this).parent().prev().html();
		$("#editPass").val(pass);
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
											<button class="btn btn-warning botonrellenar" data-toggle="modal" data-target="#myModal" type="button" name="button">Modify</button>
											<button class="btn btn-danger" type="button" name="button">Delete</button>
										</td>
									</tr>
									<?php } ?>

							</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit users</h4>
		      </div>
					<form action="" method="post">
		      <div class="modal-body">
			        <input type="text" class="form-control" id="editUser" name="marcaeditar" placeholder="User">
							<input type="text" class="form-control" id="editName" name="marcaeditar" placeholder="Name">
							<input type="text" class="form-control" id="editLast" name="marcaeditar" placeholder="Lastname">
							<input type="text" class="form-control" id="editPass" name="marcaeditar" placeholder="Password">
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
				</form>
		    </div>
		  </div>
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
