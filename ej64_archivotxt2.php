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
        <button type="submit" name="guardar">Guardar</button>
    </form>
    <?php
    if (isset($_POST["guardar"])) {
        $nombre = $_POST["nombre"];
        file_put_contents("ProgramacionA.txt", $nombre . PHP_EOL, FILE_APPEND);
        echo "<p>Nombre guardado correctamente.</p>";
    }
    ?>
    <h3>Lista de alumnos de 3ºA registrados</h3>
    <?php
    if (file_exists("programacion.txt")) {
        $contenido = file_get_contents("ProgramacionA.txt");
        echo nl2br($contenido);
    }
    else
    {echo "No existen registros.";}
    ?>
</body>
</html>