<?php
/*error_reporting(E_ALL);
ini_set("display_errors", "1");*/

include('check_active_session.php');
if (is_null($_SESSION['usuario'])) {
  $_SESSION['loggedin']=false;
}

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
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/portada1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/portada2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="header_text">
				<h3>Pequeños detalles, grandes gestos.</h3>
				<h4>El regalo perfecto a solo un par de clicks</h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">

												<?php
													$query = mysqli_query($connection, "SELECT marca.marca, descripcion, precio, zapatos.codigo, zapatos.foto FROM `zapatos` JOIN marca ON zapatos.marca=marca.codigo LIMIT 4;");
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
										</div>
										<div class="item">
											<ul class="thumbnails">
												<?php
													$query = mysqli_query($connection, "SELECT marca.marca, descripcion, precio, zapatos.codigo, zapatos.foto FROM `zapatos` JOIN marca ON zapatos.marca=marca.codigo WHERE zapatos.codigo>=6 LIMIT 4;");
													while ($fila = mysqli_fetch_array($query)) {
												 ?>

												<li class="span3">
													<div class="product-box">
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
										</div>
									</div>
								</div>
							</div>
						</div>
						<br/>
						<div class="row feature_box">
							<div class="span4">
								<div class="service">
									<div class="responsive">
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="customize">
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Marcas</span></h4>
				<div class="row">
					<div class="span2">
					    <img alt="" src="themes/images/clients/ck.png">
					</div>
					<div class="span2">
					    <img alt="" src="themes/images/clients/clarks.png">
					</div>
					<div class="span2">
					    <img alt="" src="themes/images/clients/converse.png">
					</div>
					<div class="span2">
					    <img alt="" src="themes/images/clients/lacoste.png">
					</div>
					<div class="span2">
					    <img alt="" src="themes/images/clients/guess.png">
					</div>
					<div class="span2">
					    <img alt="" src="themes/images/clients/menbur.png">
					</div>
				</div>
        <style media="screen">
          .span2 img {
            width: 100%;
            height: 100px;
          }
        </style>
			</section>
			<?php include('footer.php'); ?>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
