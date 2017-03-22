<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>
    <form action="actualizarDB.php" method="post">
      Nombre:<br>
      <input type="text" name="nombre" value="<?=$_GET["nombre"]?>"><br>
      Ciudad:<br>
      <input type="text" name="ciudad" value="<?=$_GET["Ciudad"]?>"><br>
      Conferencia:<br>
      <input type="text" name="conferencia" value="<?=$_GET["Conferencia"]?>"><br>
      Division:<br>
      <input type="text" name="division" value=<?=$_GET["Division"]?>><br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>
