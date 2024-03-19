<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start(); 
    
    if (!isset ($_SESSION['codigo'])) {
        include ("test.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar la variable 'nombre' del formulario enviado
            $asunto = $_POST["asunto"];
            $queja = $_POST["queja"];
            
            // Hacer lo que necesites con la variable $nombre
            echo "El nombre enviado es: " . $asunto;
            echo "El nombre enviado es: " . $queja;
        } else {
            // Manejar el caso en que el formulario no fue enviado
            echo "El formulario no fue enviado.";
        }
       $sesion =  $_SESSION['codigo'] = insertar($asunto, $queja);
        echo "<p>Tu código es este = $sesion </p>";
    }else {
        echo "<p>he pasao por el else</p>";
       $sesion =  $_SESSION['codigo'];
        echo "<p>Recuerda, tu código es este = $sesion </p>";
    }

    
    ?>
</body>

</html>