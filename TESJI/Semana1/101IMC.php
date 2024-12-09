<html>
<head>
    <title> Problema </title>
</head>
<body>
    <?php
    $peso = $_REQUEST['peso'];
    $estatura = $_REQUEST['estatura'];

    //$peso = $peso * 100;
    //$estatura = $estatura * 100;

    $IMC = $peso / ($estatura * $estatura);

    echo "El IMC es: ". $IMC;
    ?>
</body>
</html>