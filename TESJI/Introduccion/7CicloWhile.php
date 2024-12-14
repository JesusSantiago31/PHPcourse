<?php
// Mostramos los numeros de los dias del 1 a la fecha actual
$dia = date("d"); // Retorna la fecha actual del SO         // El dia especificmente.
$inicio = 1;
while ($inicio <= $dia){
    echo $inicio, "<br>";
    $inicio++;
}
?>