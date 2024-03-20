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
        echo"<p>$respond</p>";
        echo "<p>$id</p>";
       $id=trim($id);
    actualizar($id, $respond);
    ?>
    
</body>

</html>
