<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
<?php
if (isset($_POST["Nombre"])&&!empty($_POST['Nombre'])&&(isset($_POST["Ciudad"]))&&!empty($_POST['Ciudad'])&&(isset($_POST["Conferencia"]))&&(!empty($_POST['Conferencia'])&&(isset($_POST["Division"])&&(!empty($_POST['Division']))))) {
include 'db.php';
echo "Se ha insetado correctamente:";
$equipo=new db();


$equipo->insertarEquipos($_POST["Nombre"],$_POST["Ciudad"],$_POST["Conferencia"],$_POST["Division"]);
$devolver = $equipo->buscarEquipo($_POST["Nombre"]);
$fila = $devolver->fetch_assoc();
  echo "<br>";
  echo $fila["Nombre"];
  echo "<br>";
  echo $fila["Ciudad"];
  echo "<br>";
  echo $fila["Conferencia"];
  echo "<br>";
  echo $fila["Division"];
echo "<br>";
echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&Ciudad=".$fila["Ciudad"]."&Conferencia=".$fila["Conferencia"]."&Division=".$fila["Division"]."'>Actualizar Registro</a></br>";
echo "<a href='listaequipos.php?nombre=".$fila["Nombre"]."'>Borrar Registro</a>";
}
 ?>
  </body>
</html>
