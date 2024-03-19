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
            $consultarqueja = $_POST["consultarqueja"];            
            // Hacer lo que necesites con la variable $nombre
        } else {
            // Manejar el caso en que el formulario no fue enviado
            echo "El formulario no fue enviado.";
        }
       $sesion =  $_SESSION['codigo'] = insertar($asunto, $queja);
       
    }else {
        echo "<p>he pasao por el else</p>";
      
    }
    ?>
</body>

</html>