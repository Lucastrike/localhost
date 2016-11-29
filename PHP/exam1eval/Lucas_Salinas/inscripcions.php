
<?php
	include 'connection.php';
	include('check_active_session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Club esportiu</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="gestion.php">Club esportiu</a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
							<li><a><?php setlocale(LC_ALL, 'es_ES.UTF-8');
								echo strftime("%A %e %B %Y %H:%M:%S");?></a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php
                  $emailSession = $_SESSION['user'];
                  echo "  $emailSession";
                  ?><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="close_session.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
          </ul>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  <li class="active">
                      <a href="socis.php"><i class="fa fa-fw fa-dashboard"></i> Socis</a>
                  </li>
                  <li>
                      <a href="esports.php"><i class="fa fa-fw fa-bar-chart-o"></i> Esports</a>
                  </li>
                  <li>
                      <a href="inscripcions.php"><i class="fa fa-fw fa-table"></i> Inscripcions</a>
                  </li>
									<li>
                      <a href="notificacions.php"><i class="fa fa-fw fa-table"></i> Notificacions</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Inscripcions</div>

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
						<h4 class="modal-title" id="myModalLabel">Insertar nueva inscripcion</h4>
					</div>
					<form action="insert_inscripcio.php" method="post" id="formSingIn">
					<div class="modal-body">
						<select class="form-control" name="tipo" id="editUser">
							<?php
								$selectTipo = "SELECT * FROM tipo";
								$querySelectTipo = mysqli_query($connection,$selectTipo);
								while ($tipo=mysqli_fetch_array($querySelectTipo)) {
							?>
							<option><?php echo $tipo['tipo']; ?></option>
							<?php } ?>
						</select>
						<select class="form-control" name="marca" id="editName">
							<?php
								$selectMarca = "SELECT * FROM marca";
								$querySelectMarca = mysqli_query($connection,$selectMarca);
								while ($marca=mysqli_fetch_array($querySelectMarca)) {
							?>
							<option><?php echo $marca['marca']; ?></option>
							<?php } ?>
						</select>
						<input type="text" class="form-control" name="modelo" placeholder="">
						<input type="text" class="form-control" name="precio" placeholder="">
						<input type="text" class="form-control" name="descripcion" placeholder="">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Insertar</button>
					</div>
					</form>
				</div>
			</div>
		</div>

                  <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Cod_inscripció</th>
                            <th>DNI</th>
                            <th>Cod_sport</th>
                            <th>Curs</th>
                            <th>Quota</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                          $tableUser = "SELECT * FROM inscripcions";
                          $userQuery = mysqli_query($connection, $tableUser);
                          while ($row = mysqli_fetch_array($userQuery)) {
                            ?>
                            <tr>
                              <td><?php echo $row['cod_inscripcio']; ?></td>
                              <td><?php echo $row['dni']; ?></td>
                              <td><?php echo $row['cod_esport']; ?></td>
                              <td><?php echo $row['curs']; ?></td>
                              <td><?php echo $row['quota']; ?></td>
          										<td>
          											<button class="btn btn-warning botonrellenar" data-toggle="modal" data-target="#myModal" type="button" name="button">Modify</button>
          											<a href="edit_inscripcions.php?funcion=delete&id=<?php echo $row['cod_inscripcio'];?>" class="btn btn-danger" type="button" name="deleteId">Delete</a>
          										</td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                    <!-- Modal -->
                		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                		  <div class="modal-dialog" role="document">
                		    <div class="modal-content">
                		      <div class="modal-header">
                		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                		        <h4 class="modal-title" id="myModalLabel">Modificar inscripcions</h4>
                		      </div>
                					<form action="edit_inscripcions.php" method="post">
                		      <div class="modal-body">
                							<input type="text" class="form-control" id="cod_inscripcio" name="cod_inscripcio" placeholder="cod_inscripcio" readonly>
                			        <input type="text" class="form-control" id="dni" name="dni" placeholder="dni">
                							<input type="text" class="form-control" id="cod_sport" name="cod_sport" placeholder="cod_sport">
                							<input type="text" class="form-control" id="curs" name="curs" placeholder="curs">
                							<input type="text" class="form-control" id="quota" name="quota" placeholder="quota">
                		      </div>
                		      <div class="modal-footer">
                		        <button type="submit" class="btn btn-primary">Save changes</button>
                		      </div>
                				</form>
                		    </div>
                		  </div>
                		</div>

                  </div>
                </div>
              </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <script type="text/javascript">

$(document).ready(function(){

  $("table").on("click", ".botonrellenar", function() {
    var id = $(this).parent().prev().prev().prev().prev().prev().html();
    $("#cod_inscripcio").val(id);

    var user = $(this).parent().prev().prev().prev().prev().html();
    $("#dni").val(user);

    var name = $(this).parent().prev().prev().prev().html();
    $("#cod_sport").val(name);

    var lastName = $(this).parent().prev().prev().html();
    $("#curs").val(lastName);

    var pass = $(this).parent().prev().html();
    $("#quota").val(pass);
  });

});
</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
