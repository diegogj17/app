<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start(); 
    
    if (!isset ($_SESSION['cod'])) {
        include ("funciones.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar la variable 'nombre' del formulario enviado
            $asunto = $_POST["asunto"];
            $queja = $_POST["queja"];

            $sesion =  $_SESSION['cod'] = insertar($asunto, $queja);
            echo "<p class='recuerda'>Recuerda tu código </p>";
            echo "<p id='codigo'>$sesion</p>";
        } else {
            // Manejar el caso en que el formulario no fue enviado
            echo "El formulario no fue enviado.";
        }
       
        
    }else {
       $sesion =  $_SESSION['cod'];
        echo "<p class='recuerda'>Recuerda tu código </p>";
        echo "<p id='codigo'>$sesion</p>";
    }

    
    ?>
</body>

</html>