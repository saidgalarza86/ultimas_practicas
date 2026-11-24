<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos</title>
</head>
<body>
    <h2>Registro de alumnos de 3ºA Programación</h2>
    <form method="POST">
        Nombre del alumno:
        <input type="text" name="nombre">
        <br><br>
        edad del alumno:
        <input type="text" name="edad">
        <br><br>
        pasatiempo:
        <input type="text" name="pasatiempo">
        <br><br>
        <button type="submit" name="guardar">Guardar</button>
        <button type="submit" name="borrar" formnovalidate>borrar archivo</button>
        <br><br>
    </form>
    <?php
    if (isset($_POST["guardar"])) {

        $nombre = $_POST["nombre"];

        $edad = $_POST["edad"];

        $pasatiempo = $_POST["pasatiempo"];

        file_put_contents("ProgramacionA completo.txt", $nombre . PHP_EOL, FILE_APPEND);
        echo "<p>Nombre guardado correctamente.</p>";
        
        $edad = $_POST["edad"];
        file_put_contents("ProgramacionA completo.txt", $edad . PHP_EOL, FILE_APPEND);
        echo "<p>edad guardado correctamente.</p>";
       
        $pasatiempo = $_POST["pasatiempo"];
        file_put_contents("ProgramacionA completo.txt", $pasatiempo . PHP_EOL, FILE_APPEND);
        echo "<p>pasatiempo guardado correctamente.</p>";
        
    }
    ?>
    <h3>Lista de alumnos de 3ºA registrados</h3>
    <?php
    if (file_exists("ProgramacionA completo.txt")) {
        $contenido = file_get_contents("ProgramacionA completo.txt");
        echo nl2br($contenido);
    }
    else
    {echo "No existen registros.";}

//cosa esa para eliminar

if (isset($_POST["borrar"])) {
$archivo="ProgramacionA completo.txt";
if (file_exists($archivo)) {
    if (unlink($archivo)){
        echo "<p>archivo eliminado correctamente.</p>";
    } else {
        echo"<p>no se pudo eliminar el archivo.</p>";
    }
} else {
    echo "<p>elarchivo no existe.</p>";

}
}

?>


</body>
</html>