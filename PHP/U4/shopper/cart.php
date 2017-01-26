<?php
//error_reporting(E_ALL);
//ini_set("display_errors", "1");

include('check_active_session.php');
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
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
			<?php include('menuLogin.php'); ?>
		<div id="wrapper" class="container">
			<?php include('menu.php'); ?>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.jpg" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Borrar</th>
									<th>Foto</th>
									<th>Marca</th>
									<th>Descripción</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>

								<?php

									$codigo_usuario = $_SESSION['userID'];

									$query = mysqli_query($connection, "SELECT * FROM `cesta_temporal` WHERE codigo_usuario=$codigo_usuario;");
									if ($_SESSION['loggedin']==true) {
										while ($fila = mysqli_fetch_array($query)) {
		 						?>
								<tr>
									<td><button id="borrar" class="btn btn-warning Borrar" data="<?php echo $fila[0]; ?>">Borrar</button></td>
									<td><a href="#"><img alt="" src="<?php echo $fila[4]; ?>"></a></td>
									<td><?php echo $fila[1]; ?></td>
									<td><?php echo $fila[2]; ?></td>
									<td><?php echo $fila[3]; ?></td>
								</tr>
								<?php
										}
									}
								 ?>
							</tbody>
						</table>
						<hr>
						<p class="cart-total right">
							<?php
								if ($_SESSION['loggedin']==true) {
									$query = mysqli_query($connection,"SELECT precio FROM `cesta_temporal`");
									while ($fila = mysqli_fetch_array($query)) {
										$total = $total + $fila[0];
									}
									$coniva = $total + ($total * 0.21);
								}
							 ?>
							<strong>Precio: </strong><span id="total"><?php echo $total; ?></span>€<br />
							<strong>IVA</strong>: 21%<br>
							<strong>Total IVA incluido: </strong><span id="coniva"> <?php echo $coniva; ?></span>€<br />
						</p>
						<hr/>
						<span id="idcliente" data="<?php echo $codigo_usuario; ?>"></span>
						<p class="buttons center">
							<button class="btn btn-inverse" type="submit" id="comprar">Comprar</button>
						</p>
						<script type="text/javascript">
						$("document").ready(function(){
							$("#comprar").on("click",function(){
								var total = $("#total").html();
								var coniva = $("#coniva").html();
								var idcliente = $("#idcliente").attr("data");

								$.ajax({
												type: "POST",
												url: "comprar.php",
												data: {
													total: total,
													coniva: coniva,
													idcliente: idcliente
												},
												success: function(data) {
														alert(data);
												}
										});
							});

							$(".Borrar").on('click', function(){
								var idCesta = $(this).attr("data");

								$.ajax({
												type: "POST",
												url: "borrar.php",
												data: {
													idCesta: idCesta
												},
												success: function() {
												}
										});

								$(this).parent().parent().remove();
							});
						});
						</script>
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
								<li class="nav-header">MANUFACTURES</li>
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
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
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
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
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
					</div>
				</div>
			</section>
			<?php include('footer.php'); ?>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>
    </body>
</html>
