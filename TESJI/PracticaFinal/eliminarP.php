<html> 
 
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>Eliminar</title> 
  <link rel="stylesheet" href="style.css">
</head> 
 
<body> 
<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto")
or
die("Problemas con la conexion");

$id = $_POST["id"];


$eliminar = "DELETE FROM familia WHERE  id = '$id'";
$sql = mysqli_query($conexion, $eliminar ) 
or
 die ("Problemas en el select" .mysqli_error($conexion));

echo("Se eliminó correctamente");
?>
</body> 
 
 </html> 