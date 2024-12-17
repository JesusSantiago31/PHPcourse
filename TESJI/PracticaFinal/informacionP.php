<html> 
 
<head> 
  <title>Informacion</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head> 
 
<body> 
<br><br>
    <div>
        <h3>REGISTRO</h3>
    </div>
    <br>
    <br>
    <div>

 <?php
// Se cre la conexión con nustra base de datos
$conexion = mysqli_connect("localhost", "root", "", "proyecto")
    or
    die("Problemas con la conexion");

$nombre = $_POST["nombre"];
$parentesco = $_POST["parentesco"];
$foto = $_FILES["imagen"]["name"];
$ruta = $_FILES["imagen"]["tmp_name"];
$destino = "uploads/". $foto;
copy($ruta, $destino);

$insertar = "INSERT INTO familia (nombre, parentesco, foto) 
            VALUES
            ('$nombre', '$parentesco', '$destino')";
$sql=mysqli_query($conexion, $insertar)
or die ("Problemas en el select" .mysqli_error($conexion));

mysqli_close($conexion); 

echo "El Familiar fue dado de alta :)";



?>
 </div>
    <br><br>
    <div>
    <a href= "index.html" type="button" class="btn btn-outline-info btn-lg"> Menú Principal </a>
</div>
</body> 
 
 </html> 