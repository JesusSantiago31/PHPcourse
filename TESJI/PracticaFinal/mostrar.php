<html> 
 
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>Problema</title> 
  <link rel="stylesheet" href="style.css">
</head> 
 
<body> 
<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto")
or
die("Problemas con la conexion");
$base = "uploads/";
$mostrar = "SELECT id, nombre, parentesco, foto FROM familia";
$sql = mysqli_query($conexion, $mostrar )
or die ("Problemas en el select" .mysqli_error($conexion));

while ($ver = mysqli_fetch_array($sql)){
    ?>
    <tr>
        <td><?php echo $ver['id'];?></td>
        <td><?php echo $ver['nombre'];?></td>
        <td><?php echo $ver['parentesco'];?></td>
        <td><img src="<?php echo $ver['foto'];?>"</td>
    </tr>
    <?php
}
?>
</body> 
 
 </html> 