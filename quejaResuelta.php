<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    include("funciones.php");
    $respond = $_POST["respuestas"];
    $id = $_POST["codigoqueja"];
       $id=trim($id);
    actualizar($id, $respond);
    echo  "<p class='recuerda'>Queja Resuelta exitosamente</p>"
    ?>
    <form action="ini.php">
    <input type="submit" id="volver" value="Volver"></input>
    </form>
</body>

</html>
