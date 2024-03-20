<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="ini.php" class="volver">
        <?php
        session_start();
        include ("funciones.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar la variable 'nombre' del formulario enviado
            $id = $_POST["consultarqueja"];
            $sesion = $_SESSION['consulta'] = sacarTexto($id);
            echo "<p id='recuerda'>$sesion</p>";
            // Hacer lo que necesites con la variable $nombre
        }
        ?>

        <input type="submit" id="volver" value="Volver"></input>
    </form>
</body>

</html>