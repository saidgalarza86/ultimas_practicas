<!DOCTYPE html>
<html lange = "es">
<head>
    <meta charset="UTF-8">
    <title>guardar informacion</title>
</head>
<body>
    <h2>guardar informacion en un archivo</h2>

<?php
    $nombre = "jose hernandez";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL,
         FILE_APPEND);
    echo "informacion guardada correctamente.";
    echo "<br><br>";

?>

<?php
    $nombre = "laila cossio";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL,
         FILE_APPEND);
    echo "alumno agregado correctamente.";
    echo "<br><br>";


?>

<?php
  echo "<br><br>";
  $contenido=file_get_contents("alumnos.txt");
  echo nl2br($contenido);

?>
</body>
</html>
