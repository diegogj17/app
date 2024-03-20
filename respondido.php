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

    if (!isset ($_SESSION['answer'])) {
        include ("funciones.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar la variable 'nombre' del formulario enviado
            $respond = $_POST["respuestas"];
            $id = $_POST["codigoqueja"];
            

             actualizar($id, $respond);
            echo "<p class='recuerda'>Recuerda tu código </p>";
            echo "<p id='codigo'>$sesion</p>";
        } else {
            // Manejar el caso en que el formulario no fue enviado
            echo "El formulario no fue enviado.";
        }
    }
    ?>
       <form action="respondido.php" method="post">
            <legend>RESPONDER QUEJA</legend>
            <label for="codigo_queja">Código_Queja:</label><br>
            <input type="text" id="codigoqueja" name="codigoqueja" required><br><br>
            <textarea name="respuestas" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar">
        </form>
</body>

</html>