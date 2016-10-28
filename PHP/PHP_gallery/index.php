<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
  body {
    background: url("img/intro.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    width: 100%;
    height: 100%;
  }
  .header{
    margin-top: 100px;
    color: white;
  }
  .login {
    margin-top: 50px;
    color: white;
  }
  .footer {
    margin-top: 200px;
    color: white;
  }
  </style>

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 header text-center">
        <h2>Hi there!<h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 login">
        <form action="userok.php" method="POST">
          <div class="row">
            <div class="input-group center-block col-xs-3">
              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2" name="usuario">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="input-group center-block col-xs-3">
              <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon2" name="pass">
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <input class="btn btn-primary center-block" type="submit" value="Go">
          </div>
        </form>
      </div>
    </div>

            <div class="row">
                <div class="col-lg-12 footer">
                    <p align="center">Copyright &copy; <a href="http://www.lucassalinas.com.es">lucassalinas.com.es</a> 2016</p>
                </div>
              </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
