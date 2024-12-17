<html>
<head>
    <title>Actualizar Información</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br><br>
    <div>
        <h3>ACTUALIZACION</h3>
    </div>
    <br>
    <br>
    <div>
    <?php
    // Crear la conexión con la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "proyecto") 
    or 
    die("Problemas con la conexión");

    // Validar la entrada
    if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["parentesco"]) && isset($_FILES["imagen"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $parentesco = $_POST["parentesco"];
        $foto = $_FILES["imagen"]["name"];
        $ruta = $_FILES["imagen"]["tmp_name"];
        $destino = "uploads/" . basename($foto); // Asegúrate de que el nombre del archivo sea seguro.

        // Usar una sentencia preparada para la actualización
        $update ="UPDATE familia SET nombre = '$nombre', parentesco = '$parentesco', foto = '$destino' WHERE id = '$id'"; 
        
        $sql=mysqli_query($conexion, $update)
        or die ("Problemas en el select" .mysqli_error($conexion));

         
    } else {
        die("Error: Datos incompletos.");
    }

    // Cerrar la conexión
    mysqli_close($conexion);
    echo("Se han actuazlizado los datos correctamente")
    
    ?>
    </div>
    <br><br>
    <div>
    <a href= "index.html" type="button" class="btn btn-outline-info btn-lg"> Menú Principal </a>
</div>
</body>
</html>
