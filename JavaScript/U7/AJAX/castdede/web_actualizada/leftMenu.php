<div class="col-sm-3 col-md-2 sidebar">
<div class="top-navigation">
<div class="t-menu">MENU</div>
<div class="t-img">
  <img src="images/lines.png" alt="" />
</div>
<div class="clearfix"> </div>
</div>
<div class="drop-navigation drop-navigation">
  <ul class="nav nav-sidebar">
    <li id="left-home" class="active"><a href="index.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
    <li><a href="shows.php" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>TV Shows</a></li>
    <li><a href="#" class="menu1"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Movies<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
    <ul class="cl-effect-2">
      <li><a href="movies.php" class="option-selected" data="All">All</a></li>
      <li><a href="movies.php" class="option-selected" data="Favorites">Favorites</a></li>
      <li><a href="movies.php" class="option-selected" data="Watch-list">Watch list</a></li>
    </ul>
    <!-- script-for-menu -->
    <script>
      $( "li a.menu1" ).click(function() {
      $( "ul.cl-effect-2" ).slideToggle( 300, function() {
      // Animation complete.

      // Selection stored
      $(".option-selected").on('click', function(){
        var option_name = $(this).attr("data");
        localStorage.setItem('option_name', option_name);
      });
      });
      });
    </script>
  <li><a href="#" class="menu"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Series<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
    <ul class="cl-effect-1">
      <li><a href="series.php">All</a></li>
      <li><a href="series.php">Favourites</a></li>
      <li><a href="series.php">Watch list</a></li>
    </ul>
    <!-- script-for-menu -->
    <script>
      $( "li a.menu" ).click(function() {
      $( "ul.cl-effect-1" ).slideToggle( 300, function() {
      // Animation complete.
      });
      });
    </script>
  <li><a href="news.php" class="news-icon"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span>Youtubers</a></li>
  </ul>
  <!-- script-for-menu -->
    <script>
      $( ".top-navigation" ).click(function() {
      $( ".drop-navigation" ).slideToggle( 300, function() {
      // Animation complete.
      });
      });
    </script>
  <div class="side-bottom">
    <div class="side-bottom-icons">
      <ul class="nav2">
        <li><a href="#" class="facebook"> </a></li>
        <li><a href="#" class="facebook twitter"> </a></li>
        <li><a href="#" class="facebook chrome"> </a></li>
        <li><a href="#" class="facebook dribbble"> </a></li>
      </ul>
    </div>
    <div class="copyright">
      <p>Copyright © 2017 Castdede. All Rights Reserved | Design by <a href="http://lucassalinas.com.es/">Lucas Salinas</a></p>
    </div>
  </div>
</div>
</div>
