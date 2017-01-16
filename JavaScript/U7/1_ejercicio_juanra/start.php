<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style media="screen">
    .container {
      margin-left: 400px;
      margin-top: 100px;
    }
      .row1 {
        float: left;
      }
      .row2 {
        float: left;
      }
      div {
        overflow: hidden;
      }
      .row1 div {
        margin: 5px;
      }
      .row2 div {
        margin-bottom: 5px;
        margin-top: 5px;
      }
    </style>
  </head>
  <body>

    <form id="form1">
      <input id ="user" type="text" name="user">
      <select id="dificultad" name="dificultad">
            <option value="Easy" >Easy</option>
            <option value="hard" >Hard</option>
      </select>
      <input id="enviar" type="button" name="btn" value="enviar">
    </form>

    <div class="container" id="tablero">
      <div class="row1">
        <div style="border:3px solid green;width:200px;height:200px;" id="pato1"><img src="img/pato.jpeg"/></div>
        <div style="border:3px solid green;width:200px;height:200px;" id="lobo1"><img src="img/lobo.jpg"></div>
      </div>
      <div class="row2">
      <div style="border:3px solid green;width:200px;height:200px;" id="lobo2"><img src="img/lobo.jpg"/></div>
      <div style="border:3px solid green;width:200px;height:200px;" id="pato2"><img src="img/pato.jpeg"></div>
      </div>
    </div>


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
