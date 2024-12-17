
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        <title> Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
  <?php 


 $conexion = mysqli_connect("localhost", "root", "", "proyecto")
 or
 die("Problemas con la conexion");
 $id = $_POST["id"];
 
 $registros = mysqli_query($conexion, "SELECT * FROM familia
                       where id='$id'") or 
   die("Problemas en el select:" . mysqli_error($conexion)); 

   if ($reg = mysqli_fetch_array($registros)) { 
    ?> 
        <div>
            <p class="fs-1 fw-bold"> ACTUALIZAR REGISTRO FAMILIAR </p>
        </div>
        <div class="content">
            <form method="post" action="actualizarP.php" enctype="multipart/form-data">
                <div class="container px-4">
                        
                        <div class="mb-3">
                        <h3>ID: </h3>
                        <input type="text"class="form-control" name="id" value="<?php echo $reg['id'] ?>"  required>
                        </div>
            
                        <div class="mb-3">
                        <h3>Nombre: </h3>
                        <input type="text"class="form-control" placeholder="Introduce el nombre del familiar" name="nombre" value="<?php echo $reg['nombre'] ?>" required>
                        </div>

                        <div class="mb-3">
                        <h3>Parentesco: </h3>
                        <input type="text"class="form-control" placeholder="Introduce el parentesco" name="parentesco" value="<?php echo $reg['parentesco'] ?>" required>
                        </div>

                        <div class="mb-3">
                        <h3>Foto Actual: </h3>
                        <img src="<?php echo $reg['foto']; ?>" alt="Foto del familiar" width="150" height="150">
                        </div>
                        <div class="mb-3">
                            <h3>Foto Nueva: </h3>
                            <input type="file" class="form-control" accept="image/*" name="imagen">
                        </div>

                                        
                        <div >  
                        <button type="submit" class="btn btn-outline-primary btn-lg" name="registrar"> Actualizar </button>
                        <a href= "index.html" type="button" class="btn btn-outline-info btn-lg"> Menú Principal </a>
                        </div>
        
                </div>
                
                
                
                
            </form>
        </div>
        <?php 
  } else 
  echo "<div class='alert alert-danger'>No existe un registro familiar con el ID proporcionado.</div>";

  ?> 
        
    </body>
    </html>