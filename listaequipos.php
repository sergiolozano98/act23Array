<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Equipos</title>
  </head>
  <body>
    <?php
    //incluimos la bd
    include 'db.php';
    $nba=new db();


    //devolvemos los equipos
   $tabla=$nba->devolverEquipos();
   foreach ($tabla as $fila) {
     echo $fila["Nombre"];
     echo "<br>";
     echo "<a href='borrar.php?nombre=".$fila["Nombre"]."'>Borrar Registro</a>";
     echo "<br>";
   }
     ?>
  </body>
</html>
