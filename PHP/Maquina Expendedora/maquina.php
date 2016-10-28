
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maquina Expendedora</title>
  </head>
  <body>

    <table>

      <thead>
        <tr>
          <td>
            <h3>MAQUINA EXPENDEDORA</h3>
            <form action="<?php echo(htmlentities($_SERVER['PHP_SELF']));?>" method="post">
              <!-- Siempre se pone el metodo post por seguridad para que no se vea la informacion -->
                <!-- En los formularios php basta con los atributos type y name -->
                Price:
                <input type="text" placeholder="price" name="price[]">

                <input type="submit" name="submit" value="Submit">
                <br /><br />
            </form>
          </td>
        </tr>
      </thead>

      <tbody>

        <tr>
          <td colspan="8">
            <img src="cocalata.jpg" alt="cocacola" height="500" width="300">
          </td>
          <td>

          </td>
        </tr>

      </tbody>

    </table>

  </body>
</html>
