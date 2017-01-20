<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

include('check_active_session.php');
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
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
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span9">

						<div class="row">
							<?php

								$id=$_GET["id"];
								$query=mysqli_query($connection, "SELECT marca.marca, descripcion, precio, zapatos.foto FROM `zapatos` JOIN marca ON zapatos.marca=marca.codigo WHERE zapatos.codigo=$id;");
								while ($fila=mysqli_fetch_array($query)) {
							 ?>
							<div class="span4">
								<a href="<?php echo $fila[3]; ?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo $fila[3]; ?>" id="img"></a>
							</div>
							<div class="span5">
								<address>
									<strong>Marca:</strong> <span id="marca"><?php echo $fila[0]; ?></span><br>
									<strong>Tipo:</strong> <span id="tipo" data="<?php echo $_SESSION['userID'];?>"><?php echo $fila[1]; ?></span><br>
								</address>
								<h4><strong>Price: <span id="precio"><?php echo $fila[2]; ?></span>€</strong></h4>
							</div>
							<div class="span5">
									<p>&nbsp;</p>
									<a <?php if($_SESSION['loggedin']==false){echo "href='register.php'";} ?> class="btn btn-inverse" type="submit" id="añadir">Añadir al carrito</a>
									<script type="text/javascript">

									$("#añadir").on('click', function(){
										var img = $("#img").attr("src");
										var marca = $("#marca").html();
										var tipo = $("#tipo").html();
										var codigo_usuario = $("#tipo").attr("data");
										var precio = $("#precio").html();

									$.ajax({
										type: 'POST',
										url: 'getcarrito.php',
										data: {
											img:img,
											marca:marca,
											tipo:tipo,
											precio:precio,
											codigo_usuario:codigo_usuario
										},
										success: function(response){
											window.location.href = "cart.php";
										}
									});
								});
									</script>
							</div>
							<?php } ?>
						</div>

					</div>
					<div class="span3 col">
						<div class="block">
							<ul class="nav nav-list">
						 		<li class="nav-header">SUB CATEGORIES</li>
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
								<li class="nav-header">MANUFACTURES</li><?php
									$query = mysqli_query($connection, "SELECT * FROM `marca`;");
									while ($fila = mysqli_fetch_array($query)) {
								 ?>
								<li><a href="products.php"><?php echo $fila[1]; ?></a></li>
								<?php
									}
								 ?>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>
						</ul>
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>
				</div>
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});

				$('#myCarousel-2').carousel({
                    interval: 2500
                });
			});
		</script>
    </body>
</html>
