<html>
<body>
  <head>
    <meta charset="utf-8">
    <title>Insertar campo</title>
  </head>
<?php
  utf8_encode();
  include('conexion.php');
  $nombre = $_GET['nombre'];
  if($nombre == "articulo")
  {
  ?>
    <p>Insertar nuevo artículo</p>
    <form action='insertar_ok.php'>
      Artículo:<br>
      <input type='text' name='articulo' placeholder='ropa, electrónica...'><br>
      Precio:<br>
      <input type='number' step="0.01" min="0" name='precio' placeholder='valor numérico' onkeypress="return false;" onpaste="return false;"><br><br>
      Stock:<br>
      <input type='number' name='stock' placeholder='valor numérico'><br><br>
      Categoría:<br>
      <?php
            $sqlarticulo = "SELECT * FROM categoria";
            $resultado = mysqli_query($conexion, $sqlarticulo);
            echo "<select name='categoria'>";
            while ($fila = mysqli_fetch_array($resultado))
            {
              echo utf8_encode("<option value='".$fila[1]."'>".$fila[1]."</option>");
            }
      ?>
      <input type='submit' value='Submit'>
    </form>
    <?php
  }
    if($nombre == "categoria")
    {
    ?>
      <p>Insertar nueva categoría</p>
      <form action='insertar_ok.php'>
        Nombre de la categoría:<br>
        <input type='text' name='categoria' placeholder='agrupaciones de artículos'><br>
        <?php
              $sqlcategoria = "SELECT categoria FROM categoria";
              $arraycategorias = array();
              $resultado = mysqli_query($conexion, $sqlcategoria);
              /*while ($fila = mysqli_fetch_array($resultado))
              {
                $arraycategorias[]
              }*/
        ?>
        <input type='submit' value='Submit'>
      </form>
      <?php
    }
      ?>
</body>
</html>
