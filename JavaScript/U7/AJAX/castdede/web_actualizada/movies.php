
<?php

include('connection.php');
session_start();

?>

<!DOCTYPE HTML>
<html>
<head>
<title>My Play a Entertainment Category Flat Bootstrap Responsive Website Template | Movies :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.3.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->

<script type="text/javascript" src="js/check_active_session.js">

</script>
</head>
  <body>

    <?php include('upMenu.php'); ?>
	  <?php include('leftMenu.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">

				<div class="col-sm-10 show-grid-left main-grids">
          <img src="images/heart.png" class="heart" alt=""></img>
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info" id="info">

								<div class="heading" id="selection">
								</div>
								<!--<div class="heading-right">
									<a  href="#small-dialog8" class="play-icon popup-with-zoom-anim">Subscribe</a>
								</div>-->
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>

				</div>
        <style media="screen" id="style">
          p.makefav{
            opacity: .3;
          }
          p.makepending{
            opacity: .3;
          }
          img.heart {
            position: absolute;
            height: 60%;
            width: 70%;
            z-index: 10;
            left: 15%;
            top: 15%;
            display: none;
          }
          img.deletefav, img.deletepend {
            position: absolute;
            width: 30px;
            padding: 5px;
          }
        </style>

				<div class="col-md-2 show-grid-right">
					<h3>Upcoming Channels</h3>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">English Movies</a></li>
						</ul>
					</div>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">Chinese Movies</a></li>
						</ul>
					</div>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">Hindi Movies</a></li>
						</ul>
					</div>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">Telugu Movies</a></li>
						</ul>
					</div>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">Tamil Movies</a></li>
						</ul>
					</div>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">Kannada Movies</a></li>
						</ul>
					</div>
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="#"><img src="images/mv.png" alt="" /></a></li>
							<li><a href="#">Marathi movies</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

      <?php include('footer.php'); ?>

		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/movies.js"></script>
    <!-- Login Jquery -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>
