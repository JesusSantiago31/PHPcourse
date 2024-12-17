<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Eliminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <p class="fs-1 fw-bold"> ELIMINAR REGISTRO FAMILIAR </p>
    </div>
    <div class="content">
    <form method="post" action="eliminarP.php" enctype="multipart/form-data">
    
        <div class="container px-4">
    
            <div class="mb-3" >
                <h3>ID: </h3>
                <input type="number"class="form-control" placeholder="Introduce el id a Eliminar" name="id">
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-outline-primary btn-lg" name="registrar"> Eliminar </button>
            <a href= "index.html" type="button" class="btn btn-outline-info btn-lg"> Menú Principal </a>
        </div>
    </form>
    </div>

</body>
</html>