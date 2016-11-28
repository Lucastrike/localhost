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
				<h1 class="page-header">Zapatos</h1>
			</div>
		</div><!--/.row-->


		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Zapatos</div>
				<div class="panel-body">
					<table data-toggle="table">
							<thead>
							<tr>
									<th>ID</th>
									<th>Tipo</th>
									<th>Marca</th>
									<th>Modelo</th>
									<th>Precio</th>
									<th>Descripcion</th>
									<th></th>
							</tr>
							</thead>
							<tbody>
								<?php
								$tableUser = "SELECT zapatos.codigo, tipo.tipo, marca.marca, zapatos.modelo, zapatos.precio, zapatos.descripcion
															FROM `zapatos`
															JOIN tipo
															ON zapatos.tipo = tipo.codigo
															JOIN marca
															ON zapatos.marca = marca.codigo";
								$userQuery = mysqli_query($connection, $tableUser);
								while ($row = mysqli_fetch_array($userQuery)) {
									?>
									<tr>
										<td><?php echo $row[0]; ?></td>
										<td><?php echo $row[1]; ?></td>
										<td><?php echo $row[2]; ?></td>
										<td><?php echo $row[3]; ?></td>
										<td><?php echo $row[4]; ?></td>
										<td><?php echo $row[5]; ?></td>
										<td>
											<button class="btn btn-warning botonrellenar" data-toggle="modal" data-target="#myModal" type="button" name="button">Modify</button>
											<a href="edit_zapatos.php?funcion=delete&id=<?php echo $row['codigo'];?>" class="btn btn-danger" type="button" name="deleteId">Delete</a>
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
					<form action="edit_zapatos.php" method="post">
		      <div class="modal-body">
							<input type="text" class="form-control" id="editId" name="editId" placeholder="Id" readonly>
              <select class="form-control" name="editTipo" id="editUser">
                <?php
                  $selectTipo = "SELECT * FROM tipo";
                  $querySelectTipo = mysqli_query($connection,$selectTipo);
                  while ($tipo=mysqli_fetch_array($querySelectTipo)) {
                ?>
                <option><?php echo $tipo['tipo']; ?></option>
                <?php } ?>
              </select>
              <select class="form-control" name="editMarca" id="editName">
                <?php
                  $selectMarca = "SELECT * FROM marca";
                  $querySelectMarca = mysqli_query($connection,$selectMarca);
                  while ($marca=mysqli_fetch_array($querySelectMarca)) {
                ?>
                <option><?php echo $marca['marca']; ?></option>
                <?php } ?>
              </select>
							<input type="text" class="form-control" id="editLast" name="editModelo" placeholder="Modelo">
							<input type="text" class="form-control" id="editPass" name="editPrecio" placeholder="Precio">
							<input type="text" class="form-control" id="editPass" name="editDescripcion" placeholder="Descripcion">
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
