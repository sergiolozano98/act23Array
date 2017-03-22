<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
<?php
if (isset($_POST["nombre"])&&!empty($_POST['nombre'])&&(isset($_POST["ciudad"]))&&!empty($_POST['ciudad'])&&(isset($_POST["conferencia"]))&&(!empty($_POST['conferencia'])&&(isset($_POST["division"])&&(!empty($_POST['division']))))) {
include 'db.php';
echo "Se ha insetado correctamente:";
$equipo=new db();


$equipo->actualizarEquipos($_POST["nombre"],$_POST["ciudad"],$_POST["conferencia"],$_POST["division"]);
$devolver = $equipo->buscarEquipo($_POST["nombre"]);
while ($fila = $devolver->fetch_assoc()){
  echo "<br>";
  echo $fila["Nombre"];
  echo "<br>";
  echo $fila["Ciudad"];
  echo "<br>";
  echo $fila["Conferencia"];
  echo "<br>";
  echo $fila["Division"];
}
echo "<br>";
echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualizar Registro</a></br>";
echo "<a href='listaequipos.php?nombre=".$fila["Nombre"]."'>Borrar Registro</a>";
}
 ?>
  </body>
</html>
