

<?php
	$con=mysqli_connect("localhost","root","bbdd","clientes");
	$sql=mysqli_query($con, "SELECT * FROM clientes");
		
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>CLIENTES</title>
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
                   <li><a href="index.php">INICIO</a></li>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">	
						<div id="main">
						<table class="table table-hover" width="100%" cellspacing="0" cellpadding="0">
								<tr>
									<td width="10%" class="columna">CODIGO</td>
									<td width="20%" class="columna">NOMBRE</td>
									<td width="70%" class="columna">DIRECCION</td>
									<td width="70%" class="columna">POBLACION</td>
								</tr>
						<?php 
						$i=0;
						while ($clientes = mysqli_fetch_array($sql)) {
						?>
							<tr class="fila_<?php echo $i%2;?>">
								<td  class="curso"><?php echo $clientes[0];?></td>
								<td><?php echo $clientes[1];?></td>
								<td><?php echo $clientes[2];?></td>
								<td><?php echo $clientes[3];?></td>
							</tr>																																																																																										
						<?php 
						
						$i=$i+1;
						}?>
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

    


</body>
    
    
</html>
