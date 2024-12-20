
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title> Registrar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <p class="fs-1 fw-bold"> REGISTRO FAMILIAR </p>
    </div>
    <div class="content">
        <form method="post" action="informacionP.php" enctype="multipart/form-data">
            <div class="container px-4">
          
                    <div class="mb-3">
                    <h3>Nombre: </h3>
                    <input type="text"class="form-control" placeholder="Introduce el nombre del familiar" name="nombre">
                    </div>

                    <div class="mb-3">
                    <h3>Parentesco: </h3>
                    <input type="text"class="form-control" placeholder="Introduce el parentesco" name="parentesco">
                    </div>

                    <div class="mb-3">
                    <h3>Foto: </h3>
                    <input type="file" class="form-control" placeholder="Introduce tu imagen" accept="image/*" name="imagen">               
                    </div>
                                    
                    <div >  
                    <button type="submit" class="btn btn-outline-primary btn-lg" name="registrar"> Registrar </button>
                    </div>
    
            </div>
            
            
            
            
        </form>
    </div>
   
    
</body>
</html>