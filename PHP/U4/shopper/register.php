<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Rophsion || Tienda online</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">

		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
	</head>
    <body>
      <?php include('menuLogin.php'); ?>
		<div id="wrapper" class="container">
			<?php include('menu.php'); ?>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login or Register</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span5">
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" id="usernameLogin" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="passwordLogin" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" value="Sign into your account" id="submitLogin">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="span7">
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="#" method="post" class="form-stacked" id="insertForm">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Usuario" class="input-xlarge" name="username" id="username">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="email" placeholder="email" class="input-xlarge" name="email" id="email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="contraseña" class="input-xlarge" name="password" id="password">
									</div>
								</div>
								<div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" id="submit" type="button" value="Registrar"></div>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="../index.html">Homepage</a></li>
							<li><a href="contact.php">Contac Us</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="register.html">Login</a></li>
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
		<script src="register.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>
    </body>
</html>
