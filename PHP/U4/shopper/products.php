<?php
//error_reporting(E_ALL);
//ini_set("display_errors", "1");

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Zapashion</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
			<?php include('menuLogin.php'); ?>
		<div id="wrapper" class="container">
			<?php include('menu.php'); ?>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.jpg" alt="New products" >
				<h4><span>New products</span></h4>
			</section>
			<section class="main-content">

				<div class="row">
					<div class="span9">
						<ul class="thumbnails listing-products">

							<?php
								$query = mysqli_query($connection, "SELECT marca.marca, descripcion, precio, zapatos.codigo, zapatos.foto FROM `zapatos` JOIN marca ON zapatos.marca=marca.codigo;");
								while ($fila = mysqli_fetch_array($query)) {
							 ?>
							 <li class="span3">
 								<div class="product-box">
 									<span class="sale_tag"></span>
 									<p><a href="product_detail.php?id=<?php echo $fila[3]; ?>"><img src="<?php echo $fila[4]; ?>" alt="" /></a></p>
 									<a class="title"><?php echo $fila[0]; ?></a><br/>
 									<a class="category"><?php echo $fila[1]; ?></a>
 									<p class="price"><?php echo $fila[2]; ?></p>
 								</div>
 							</li>
							<?php
								}
							 ?>

						</ul>
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
						
					</div>
					<div class="span3 col">
						<div class="block">
							<ul class="nav nav-list">
								<li class="nav-header">Subcategorias</li>
								<!--<li class="active"><a href="products.php">Phasellus ultricies</a></li>-->
								<?php
									$query = mysqli_query($connection, "SELECT * FROM `tipo`;");
									while ($fila = mysqli_fetch_array($query)) {
								 ?>
								<li><a href="products.php"><?php echo $fila[1]; ?></a></li>
								<?php
									}
								 ?>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<?php
									$query = mysqli_query($connection, "SELECT * FROM `marca`;");
									while ($fila = mysqli_fetch_array($query)) {
								 ?>
								<li><a href="products.php"><?php echo $fila[1]; ?></a></li>
								<?php
									}
								 ?>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>
													<img alt="" src="themes/images/ladies/1.jpg"><br/>
													<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<img alt="" src="themes/images/ladies/2.jpg"><br/>
													<a href="product_detail.php" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">
							<h4 class="title"><strong>Best</strong> Seller</h4>
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<?php include('footer.php'); ?>
		</div>
		<script src="themes/js/common.js"></script>
    </body>
</html>
