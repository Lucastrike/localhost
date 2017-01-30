
<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Castdede</title>
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.3.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->

<script type="text/javascript" src="js/check_active_session.js"></script>

</head>
  <body>

    <?php include('upMenu.php'); ?>
	  <?php include('leftMenu.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 col-sm-offset-1 single-left">
					<div class="song" id="movie">
						<!--<div class="song-info">
							<h3>Etiam molestie nisl eget consequat pharetra</h3>
					  </div>
						<div class="video-grid">
							<iframe src="https://www.youtube.com/embed/oYiT-vLjhC4" allowfullscreen></iframe>
						</div>-->
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5>
							<ul>
								<li><a href="#" class="icon fb-icon">Facebook</a></li>
								<li><a href="#" class="icon dribbble-icon">Dribbble</a></li>
								<li><a href="#" class="icon twitter-icon">Twitter</a></li>
								<li><a href="#" class="icon pinterest-icon">Pinterest</a></li>
								<li><a href="#" class="icon whatsapp-icon">Whatsapp</a></li>
								<li><a href="#" class="icon like">Like</a></li>
								<li><a href="#" class="icon comment-icon">Comments</a></li>
								<li class="view">200 Views</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="published">
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">
								<ul id="myList">
                  <li>


                    <div id="puntos"></div>
                    <script>
                      $(function() {
                        $('#puntos').valoraciones({star_tot:10, evento:'hover', star_max:100, star_size:2});
                      });
                    </script>

                    <div id="puntos"></div>
                    <p>Puntuación: <span></span></p>
                    <script>
                    var puntuaciones = function(datos) {
                      $parrafo=datos.selector.next('p');
                      $parrafo.children('span').text(datos.valor);
                    };

                    $(function() {
                      $('#puntos').valoraciones({star_tot:8, star_max:90, evento:'hover', callback:puntuaciones});
                    });
                    </script>


                  </li>
									<li>
										<h4 id="synopsis">Synopsis</h4>
									</li>
									<!--<li>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p>
										<p>Nullam fringilla sagittis tortor ut rhoncus. Nam vel ultricies erat, vel sodales leo. Maecenas pellentesque, est suscipit laoreet tincidunt, ipsum tortor vestibulum leo, ac dignissim diam velit id tellus. Morbi luctus velit quis semper egestas. Nam condimentum sem eget ex iaculis bibendum. Nam tortor felis, commodo faucibus sollicitudin ac, luctus a turpis. Donec congue pretium nisl, sed fringilla tellus tempus in.</p>
										<div class="load-grids">
											<div class="load-grid">
												<p>Category</p>
											</div>
											<div class="load-grid">
												<a href="movies.php">Entertainment</a>
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>-->
								</ul>
							</div>
					</div>



					<!--<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">All Comments (8,657)</a>
							<div class="box">
								<form>
									<input type="text" placeholder="Name" required=" ">
									<input type="text" placeholder="Email" required=" ">
									<input type="text" placeholder="Phone" required=" ">
									<textarea placeholder="Message" required=" "></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
							<div class="all-comments-buttons">
								<ul>
									<li><a href="#" class="top">Top Comments</a></li>
									<li><a href="#" class="top newest">Newest First</a></li>
									<li><a href="#" class="top my-comment">My Comments</a></li>
								</ul>
							</div>
						</div>
						<div class="media-grids">
							<div class="media">
								<h5>Tom Brown</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Steven Smith</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Marry Johne</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Peter Johnson</h5>
								<div class="media-left">
									<a href="#">

									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
						</div>
					</div>-->



				</div>


				<!--<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r2.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r3.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r5.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r6.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author">By <a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r2.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r3.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r5.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.php"><img src="images/r6.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.php" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>-->


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
    <script type="text/javascript" src="js/single.js"></script>
    <script src="js/valoraciones.min.js"></script>
  </body>
</html>
