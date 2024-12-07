<?php
// IF STATEMENT AND IF ESLE STATEMENT
$valor = rand(1, 10); // rand() da un nímero aleatorio entre el 1 y el 10
echo "El valor sorteado es $valor<br>";
if ($valor <= 5){
    echo "Es menor o igual a 5";
} else {
    echo "Es mayor a 5";
}
 ?>