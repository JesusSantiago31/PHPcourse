<html> 
 
<head> 
  <title>Problema</title> 
</head> 
 
<body> 
 <?php
// Se cre la conexión con nustra base de datos
$conexion = mysqli_connect("localhost", "root", "", "proyecto")
    or
    die("Problemas con la conexion");

$nombre = $_POST["nombre"];
$parentesco = $_POST["parentesco"];
$imagen = $_FILES["imagen"]["tmp_name"];
$destino = $imagen;
copy($ruta, $destino);

$insertar = "INSERT INTO familia (nombre, parentesco, foto) 
            VALUES
            ('$nombre'm '$parentesco', '$destino')";
$sql=mysqli_query($conexion, $insertar)
or die ("Problemas en el select" .mysqli_error($conexion));

echo "El Familiar fue dado de alta :)";



?>
</body> 
 
 </html> 