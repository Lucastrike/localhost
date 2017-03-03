
<?php
		include('includes/conexion.php');
		include('funciones/select_alumnos.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>ALUMNOS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	
  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
<body>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   <?php include 'menu.php'; ?>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">	<div id="main">

						<!-- id="example" es necesario para las datatables -->
						<table  id="example"  class="table table-hover" width="100%" cellspacing="0" cellpadding="0">
							<thead>
								<tr>
									<td width="10%" class="columna">CODIGO</td>
									<td width="20%" class="columna">NOMBRE</td>
									<td width="70%" class="columna">APELLIDOS</td>
									<td width="70%" class="columna">CURSO</td>
								</tr>
							</thead>
						<tbody>
						<?php 
						$i=0;
						while ($alumnos = mysqli_fetch_row($result_consulta)) {
						?>
							<!--LO DE echo $i%2; ES PARA LOS ESTILOS,  NO ES NADA DE DATATABLES-->
							<tr class="fila_<?php echo $i%2;?>">
								<td  class="curso"><?php echo $alumnos[0];?></td>
								<td><?php echo $alumnos[1];?></td>
								<td><?php echo $alumnos[2];?></td>
								<td><?php echo $alumnos[3];?></td>
							</tr>																																																																																										
						<?php 
						//$i PARA LOS ESTILOS,  NO ES NADA DE DATATABLES
						$i=$i+1;
						}?>
						</tbody>
					</table>	
				</div>
               </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


       <!-- FUNCIONES PARA LAS DATATABLES -->
    <script src="http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
    <script src="http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    
    <script>
		$(document).ready(function () {
			$('#example').dataTable();
		});
	</script>



    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    


</body>
    
    
</html>
