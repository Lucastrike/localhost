<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo Html::encode(\Yii::$app->name); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <?php $this->beginBody() ?>

  <div class="top-logo-wrapper">
    <div class="top-logo"></div>
    <p>
            <?php echo Html::encode(\Yii::$app->name); ?>
    </p>
  </div>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <?php
  				echo Menu::widget([
  				  'options' => [
  				    "id"  => "nav",
  				    "class" => "nav navbar-nav"
  				  ],
				    'items' => [
				        ['label' => 'Home', 'url' => ['site/index']],
				        ['label' => 'About', 'url' => ['site/about']],
				        ['label' => 'Contact', 'url' => ['site/contact']],
				        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
				    ],
  				]);
	  		?>

            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="media-embed">
         <img src="http://i.imgur.com/nY3lZcX.jpg" />
         <p class="bold-text">
             what<br />
             just<br />
             happened!?
         </p>
      </div>

      <div class="row darkness">
        <div class="col col-md-12">
            <?php echo $content; ?>
        </div>
      </div>

      <hr>

      <footer>
        <p>© 2016 <?php echo Html::encode(\Yii::$app->name); ?></p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>
    <?php $this->endBody(); ?>
  </body>
</html>
<?php $this->endPage(); ?>
