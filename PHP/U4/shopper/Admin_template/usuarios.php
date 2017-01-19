<?php
	include('check_active_session.php');

	if ($_SESSION['usuario'] == "lucastrike1@gmail.com") {
		include "menuAdmin.php";
	}
	else {
		include "menu.php";
	}
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

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">

$(document).ready(function(){

	$("table").on("click", ".botonrellenar", function() {
		var id = $(this).parent().prev().prev().prev().prev().prev().html();
		$("#editId").val(id);

		var user = $(this).parent().prev().prev().prev().prev().html();
		$("#editUser").val(user);

		var name = $(this).parent().prev().prev().prev().html();
		$("#editName").val(name);

		var lastName = $(this).parent().prev().prev().html();
		$("#editLast").val(lastName);

		var pass = $(this).parent().prev().html();
		$("#editPass").val(pass);
	});

});
</script>

<style media="screen">
	.new {
		margin-left: 15px;
	}
</style>

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

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-success btn-lg new" data-toggle="modal" data-target="#myModal1">
			Nuevo usuario
		</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Insertar nuevo usuario</h4>
					</div>
					<form action="insertUser.php" method="post" id="formSingIn">
					<div class="modal-body">
						<input type="text" class="form-control" name="firstName" placeholder="Name">
						<input type="text" class="form-control" name="lastName" placeholder="Lastname">
						<input type="text" class="form-control" name="email" placeholder="email">
						<input type="text" class="form-control" name="password" placeholder="password">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Insertar</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
				<div class="panel-body">
					<table data-toggle="table">
							<thead>
							<tr>
									<th>ID</th>
									<th>User</th>
									<th>Name</th>
									<th>Lastname</th>
									<th>Password</th>
									<th></th>
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
											<a href="edit_user.php?funcion=delete&id=<?php echo $row['id_usuario'];?>" class="btn btn-danger" type="button" name="deleteId">Delete</a>
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
					<form action="edit_user.php" method="post">
		      <div class="modal-body">
							<input type="text" class="form-control" id="editId" name="editId" placeholder="User" readonly>
			        <input type="text" class="form-control" id="editUser" name="editUser" placeholder="User">
							<input type="text" class="form-control" id="editName" name="editName" placeholder="Name">
							<input type="text" class="form-control" id="editLast" name="editLast" placeholder="Lastname">
							<input type="text" class="form-control" id="editPass" name="editPass" placeholder="Password">
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
