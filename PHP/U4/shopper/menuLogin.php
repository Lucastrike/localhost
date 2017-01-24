<?php
  require('languages.php');

	if ( isset($_SESSION['lang']) ){
		$lang = $_SESSION['lang'];
	}
?>
<div id="top-bar" class="container">
  <div class="row">
    <!--<div class="span4">
      <form method="POST" class="search_form">
        <input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
      </form>
    </div>-->
    <div class="span8">
      <div class="account pull-right">
        <nav>
        	<ul class="user-menu">
          	<li><a href="#"><?php echo __('Mi cuenta', $lang) ?></a>
          		<ul>
          			<li><a href="close_session.php"><?php echo __('Cerrar sesion', $lang) ?></a></li>
          		</ul>
          	</li>
            <li><a href="cart.php"><?php echo __('Tu cesta', $lang) ?></a></li>
            <li><a href="checkout.php"><?php echo __('Comprar', $lang) ?></a></li>
            <li><a href="register.php"><?php echo __('Entrar', $lang) ?></a></li>
            <li><a href="Admin_template/index.php">Admin</a></li>
            <li><button id="es" class="flag"></button></li>
          	<li><button id="en" class="flag"></button></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  $(".flag").on('click', function(){
    var flag = $(this).attr("id");

    $.ajax({
      type: 'POST',
      url: 'lang.php',
      data: {
        lang:flag
      },
      success: function(response){
        location.reload();
      }
    });
  });

</script>

<style media="screen">

  #es {
    width: 40px;
    height: 30px;
    background-image: url(themes/images/spain.png);
    background-size: cover;
  }
  #en {
    width: 40px;
    height: 30px;
    background-image: url(themes/images/english.png);
    background-size: cover;
    background-position: 41%;
  }

  nav ul ul {
    display: none;
  }

  nav ul li:hover > ul {
    display: block;
  }
    nav ul {
  	list-style: none;
  	position: relative;
  	display: inline-table;
  }
  nav ul li:hover a {
  	color: #1ab188;
  }

  nav ul li a {
  	display: block;
  	color: #757575; text-decoration: none;
  }

  nav ul ul {
  	background: #fff;
  	position: absolute;
  }
  nav ul ul li {
  	float: none;
  	position: relative;
  }
  nav ul ul li a {
  	color: #fff;
    padding: 5px;
  }
  nav ul ul li a:hover {
  	background: #1ab188;
    color: #fff;
  }
</style>
