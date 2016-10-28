<?php
session_start();
if (is_null($_SESSION['usuario'])) {
  header('location: index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photo Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style media="screen">

      body {
        background: url("img/mainland.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        width: 100%;
        height: 100%;
        padding-top: 100px;
      }

      .mainContainer {
        position: relative;
        height: 100%;
      }

      h1.welcome {
        text-align: center;
        margin-top: 40%;
        color: white;
      }

      .albumImg {
        margin: 20px;
      }
      .homeAlbum {
        margin-bottom: 5px;
      }
      .addAlbumbtn{
        margin-top: 5px;
      }
      .uploadPicture{
        margin-top: 5px;
      }

    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="home">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" id="albums">Albums</a>
                    </li>
                    <li>
                        <a href="#" id="server">Server</a>
                    </li>
                    <li>
                        <a href="#"  data-toggle="modal" data-target="#myModal" >Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a><?php setlocale(LC_ALL, 'es_ES.UTF-8');
                          echo strftime("%A %e %B %Y %H:%M:%S");?></a>
                    </li>
                    <li>
                        <a href="close_session.php" id="server">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container-fluid mainContainer">

      <div class="row">
        <div class="col-xs-4 col-xs-offset-4" id="welcome">
          <h1 class="welcome">Photo Gallery</h1>
        </div>

        <div class="col-xs-2 col-xs-offset-1 hidden" id="albumsMenu">
          <button class="btn btn-primary btn-md btn-block homeAlbum" type="button" data-toggle="collapse" data-target="#collapseMenu" aria-expanded="false" aria-controls="collapseExample">
            Albums
          </button>
               <div class="collapse" id="collapseMenu">
                   <form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
                     <?php
                       $arrayAlbums = scandir("albums");

                       for ($i=2; $i<count($arrayAlbums); $i++) {
                         $album = $arrayAlbums[$i];
                         echo "<button type='button' class='btn-album btn btn-info btn-md btn-block' id='btn-$album'>$album</button>";
                       }
                      ?>
                    </form>
                    <button type="button" class="btn btn-success btn-md btn-block addAlbumbtn" data-toggle="collapse" data-target="#collapseAdd" aria-expanded="false" aria-controls="collapseExample">Add Album</button>
                    <div class="collapse" id="collapseAdd">
                      <form action="addAlbum.php" method="post">
                        <input type="text" class="form-control" aria-describedby="sizing-addon2" name="albumName">
                        <input class="btn btn-info btn-md btn-block" type="submit" name="submit" value="OK">
                      </form>
                    </div>
               </div>
            </div>

            <?php
              $arrayAlbums = scandir("albums");

              for ($i=2; $i<count($arrayAlbums); $i++) {
                $album = $arrayAlbums[$i];
                echo '<div class="col-xs-8 galleryContainer hidden" id="Container'.$album.'">
                  <div class="panel panel-default">
                    <div class="panel-heading">'.$album.'</div>
                    <div class="panel-body">';
                    $imgAlbum = scandir("albums/".$album.'/');
                    for($x=2; $x<count($imgAlbum); $x++){
                      echo '<img class="albumImg" width="150px" src="albums/'.$album.'/'.$imgAlbum[$x].'"/>';
                      echo '<a id="boton" href="download.php?album='.$album.'&foto='.$imgAlbum[$x].'">Download</a>';
                    };
                    echo '
                    </div>
                  </div>
                </div>';
              }
             ?>

          <div class="col-xs-6 col-xs-offset-3 serverContainer hidden" id="serverContainer">
            <div class="panel panel-default">
              <div class="panel-heading">Server</div>
              <div class="panel-body">
                <?php
                $allAlbums = scandir("albums/");
                for($x=2; $x<count($allAlbums); $x++){
                  $allImages = scandir("albums/$allAlbums[$x]/");
                  for ($i=2; $i<count($allImages); $i++) {
                    echo '<img class="albumImg" width="150px" src="albums/'.$allAlbums[$x].'/'.$allImages[$i].'"/>';
                    echo '<a href="delete_picture.php?album='.$allAlbums[$x].'&image='.$allImages[$i].'"><button type="button" class="btn btn-danger">Delete</button></a>';
                  }
                };
                 ?>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-xs-2 col-xs-offset-1 hidden" id="upload">
            <button class="btn btn-primary btn-md btn-block uploadPicture" type="button" data-toggle="collapse" data-target="#collapseUpload" aria-expanded="false" aria-controls="collapseExample">
              Upload picture
            </button>
                 <div class="collapse" id="collapseUpload">
                   <div class="">
                     <form action="uploadPicture.php" method="post" enctype="multipart/form-data">
                       <select name="Albums" class="form-control">
                         <?php
                         $allAlbums = scandir("albums/");
                         for($x=2; $x<count($allAlbums); $x++){
                           echo '<option value="'.$allAlbums[$x].'">'.$allAlbums[$x].'</option>';
                         };
                          ?>
                       </select>
                        <input class="btn btn-info" type="file" name="picture" id="file" required><br />
                        <input class="btn btn-info" type="submit" name="submit" value="OK">
                      </form>
                   </div>
                 </div>
              </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact form</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                  <label for="from">From:</label>
                  <input class="form-control" type="text" name="from" value"" id="from" ?>
                  <br />
                  <label for="subject">Subject:</label>
                  <input class="form-control" type="text" name="subject" value"" id="subject">
                  <br />
                  <label for="message">Message:</label>
                  <input class="form-control" type="textarea" name="message" value"" id="message">
                  <br />
                  <input class="btn btn-info" type="submit" name="send" value"send">
                </form>
                <?php

                $from = $_POST["from"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
                mail ("lucastrike1@gmail.com", $subject, $message, "From: $from");

                 ?>
              </div>
            </div>
          </div>
        </div>

      </div>



        <!-- Footer -->
        <!--<footer>
          <hr>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="www.lucassalinas.com.es">lucassalinas.com.es</a> 2016</p>
                </div>
            </div>
        </footer>-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- gallery functions JavaScript -->
    <script src="js/gallery.js"></script>

</body>

</html>
