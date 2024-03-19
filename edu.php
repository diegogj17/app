<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <button type="button" id="crearqueja">Crear Queja</button>
    <button type="button" id="responderqueja">Responder Queja</button>

    <?php


    ?>
    <div id="invisible">
        <form action="codigo.php" method="post">
            <legend>QUEJAS</legend>
            <label for="asunto">Asunto:</label><br>
            <input type="text" id="asunto" name="asunto" required><br><br>
            <label for="queja">Quejas:</label><br>
            <textarea id="queja" name="queja" rows="6" cols="40" required></textarea><br><br>
            <input type="submit" value="Enviar" id="continuar">
        </form>
    </div>



    <div id="invisible2">
        <?php
       
        
        ?>
        <form action="bongocat.htm" method="post">
            <legend>RESPONDER QUEJAS</legend>
            <label for="codigo_queja">Código_Queja:</label><br>
            <input type="text" id="asunto" name="asunto" required><br><br>
            <label for="queja">Quejas:</label><br>
            <textarea id="queja" name="queja" rows="6" cols="40" required></textarea><br><br>
            <label for="respuesta_queja">Respuesta_queja:</label><br>
            <textarea id="respuesta" name="respuesta" rows="6" cols="40"></textarea><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <script src="main.js" charset="utf-8"></script>
</body>

</html>