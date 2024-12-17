<html> 
 
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>Eliminar</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head> 
 
<body> 
<br><br>
    <div>
        <h3>ELIMINACIÓN</h3>
    </div>
    <br>
    <br>
    <div>
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
 </div>
 
 <br><br>
 <div>
 <a href= "index.html" type="button" class="btn btn-outline-info btn-lg"> Menú Principal </a>
</div>
</body> 
 
 </html> 