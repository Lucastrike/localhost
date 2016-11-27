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

		var id = $(this).parent().prev().prev().html();
		$("#editId").val(id);

		var tipo = $(this).parent().prev().html();
		$("#editTipo").val(tipo);
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
				<h1 class="page-header">Tipo</h1>
			</div>
		</div><!--/.row-->


		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tipo</div>
				<div class="panel-body">
					<table data-toggle="table">
							<thead>
							<tr>
									<th>ID</th>
									<th>Tipo</th>
									<th></th>
							</tr>
							</thead>
							<tbody>
								<?php
								$tableTipo = "SELECT * FROM tipo";
								$tipoQuery = mysqli_query($connection, $tableTipo);
								while ($row = mysqli_fetch_array($tipoQuery)) {
									?>
									<tr>
										<td><?php echo $row['codigo']; ?></td>
										<td><?php echo $row['tipo']; ?></td>
										<td>
											<button class="btn btn-warning botonrellenar" data-toggle="modal" data-target="#myModal" type="button" name="button">Modify</button>
											<a href="edit_tipo.php?funcion=delete&id=<?php echo $row['codigo'];?>" class="btn btn-danger" type="button" name="deleteId">Delete</a>
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
		        <h4 class="modal-title" id="myModalLabel">Edit tipo</h4>
		      </div>
					<form action="edit_tipo.php" method="post">
		      <div class="modal-body">
							<input type="text" class="form-control" id="editId" name="editId" placeholder="User" readonly>
			        <input type="text" class="form-control" id="editTipo" name="editTipo" placeholder="User">
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
