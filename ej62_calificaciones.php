<?php
$alumnos = array(
    array("Said", 9, 10),
    array("Carlos", 8, 9),
    array("Juan", 10, 10),
    array("Pedro", 7, 8)
);

echo "<h2>Lista de alumnos</h2>";

for ($i = 0; $i < 4; $i++) {
    echo "Nombre: " . $alumnos[$i][0] . "<br>";
    echo "Calificacion 1: " . $alumnos[$i][1] . "<br>";
    echo "Calificacion 2: " . $alumnos[$i][2] . "<br><br>";
}
?>