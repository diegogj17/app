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
            $id = $_POST["codigoqueja"];
            $sesion = $_SESSION['answer'] = sacarTexto($id);
            echo "<p class='recuerda'>$sesion</p>";


        } else {
            $sesion = $_SESSION['answer'];
            echo "<p id='recuerda'>Recuerda tu código </p>";
            echo "<p id='codigo'>$sesion</p>";
        }
    }
    ?>
    <form action="quejaResuelta.php" method="post">
        <legend>RESPONDER QUEJA</legend>
        <textarea name="codigoqueja" cols="6" rows="1">
            <?php
            $id = $_POST["codigoqueja"];
            echo "$id";
            $id = trim($id);
            ?>
        </textarea>
        <textarea name="respuestas" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>