<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matrices</title>
</head>
<body>
    <h2>Matrices</h2>
    <?php
$n = array ();
$valor = 100;
for ($f = 0; $f < 5; $f++) {
    for ($c = 0; $c < 4; $c++) {
        $n[$f][$c] = $valor;
        $valor+=10;
    }
}
echo "<br> Matriz A";
echo "<br>";
for ($f = 0; $f < 3; $f++) {
    for ($c = 0; $c < 3; $c++) {
        echo $n[$f][$c]. " ";
    }
    echo "<br>";
}

$n = array ();
$valor = 500;
for ($f = 0; $f < 5; $f++) {
    for ($c = 0; $c < 4; $c++) {
        $n[$f][$c] = $valor;
        $valor+=20;
    }
}
echo "<br> Matriz B";
echo "<br>";
for ($f = 0; $f < 3; $f++) {
    for ($c = 0; $c < 3; $c++) {
        echo $n[$f][$c]. " ";
    }
    echo "<br>";
}

?>