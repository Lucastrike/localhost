
<?php include 'connection.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href=""><span>Zapashion</span></a>
  				<ul class="user-menu">
  					<li class="dropdown pull-right">
  						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                <?php
                  $emailSession = $_SESSION['usuario'];
                  echo $emailSession;
                  //Para sacar otros campos de la tabla
                  /*$emailUser = mysqli_query($connection, "SELECT usuario FROM usuarios WHERE usuario='$emailSession'");
                  while ($row = mysql_fetch_array($emailUser)) {
                    echo $row['usuario'];
                  }*/
                  ?>
                  <span class="caret"></span></a>
  						<ul class="dropdown-menu" role="menu">
  							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
  							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
  							<li><a href="close_session.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
  						</ul>
  					</li>
  				</ul>
  			</div>

  		</div><!-- /.container-fluid -->
  	</nav>

  	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  		<!--<form role="search">
  			<div class="form-group">
  				<input type="text" class="form-control" placeholder="Search">
  			</div>
  		</form>-->
  		<ul class="nav menu">
  			<li class="active"><a href="gestion.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
  			<li><a href="widgets.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
  			<li><a href="charts.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
  			<li><a href="tables.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
  			<li><a href="forms.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
  			<li><a href="panels.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
  			<li><a href="icons.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li>
        <!--<li><a href="usuarios.php"><svg class="glyph filo female-user"><use xlink:href="#filo-female-user"></use></svg> Usuarios</a></li>
        <li><a href="zapatos.php"><svg class="glyph filo package"><use xlink:href="#filo-package"></use></svg> Zapatos</a></li>
        <li><a href="tipo.php"><svg class="glyph filo golf-flag"><use xlink:href="#filo-golf-flag"></use></svg> Tipo</a></li>
        <li><a href="marca.php"><svg class="glyph filo blank-tag"><use xlink:href="#filo-blank-tag"></use></svg> Marca</a></li>-->
  			<!--<li class="parent ">
  				<a href="#">
  					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown
  				</a>
  				<ul class="children collapse" id="sub-item-1">
  					<li>
  						<a class="" href="#">
  							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
  						</a>
  					</li>
  					<li>
  						<a class="" href="#">
  							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
  						</a>
  					</li>
  					<li>
  						<a class="" href="#">
  							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
  						</a>
  					</li>
  				</ul>
  			</li>-->
  			<li role="presentation" class="divider"></li>
  			<li><a href="index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
  		</ul>

  	</div><!--/.sidebar-->

  </body>
</html>
