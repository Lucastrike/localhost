

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style media="screen">
      form {
        margin-top: 200px;
      }
    </style>
  </head>
  <body>

        <form class="form-horizontal" action="checkLogin.php" method="post">
      <div class="form-group">
        <div class="col-sm-4 col-sm-offset-4">
          <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="Username">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4 col-sm-offset-4">
          <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="Password">
        </div>
      </div>
      <!--<div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
        </div>
      </div>-->
      <div class="form-group">
        <div class="col-sm-1 col-sm-offset-6">
          <button type="submit" class="btn btn-success center-block">Sign in</button>
        </div>
        <div class="col-sm-1">
          <a href="register.php" class="btn btn-success">Sing up</a>
        </div>
      </div>
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
