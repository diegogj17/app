<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="image">
    <a href="https://gruposolutia.com/">
    <img src="solutia.png" width="300px">
    </a>
    </div>
    <button type="button" id="crearqueja">Crear Queja</button>
    <button type="button" id="responderqueja">Responder Queja</button>
    <button type="button" id="consultarqueja">Consultar Queja</button>
    <div class="image2">
        <img src="solutia1.jpg" width="1550px" height="400px">
    </div>
    <div id="invisible">
        <form action="showIdCode.php" method="post">
            <legend>QUEJAS</legend>
            <label for="asunto">Asunto:</label><br>
            <input type="text" id="asunto" name="asunto" required><br><br>
            <label for="queja">Quejas:</label><br>
            <textarea id="queja" name="queja" rows="6" cols="40" required></textarea><br><br>
            <input type="submit" value="Enviar" id="continuar">
        </form>
    </div>



    <div id="invisible2">
        <form action="respuesta.php" method="post">
            <legend>QUEJAS</legend>
            <label for="codigo_queja">Introduce el código de la queja:</label><br>
            <input type="text" id="codigoqueja" name="codigoqueja" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div id="invisible3">
        <form action="consultarqueja.php" method="post">
            <legend>CONSULTAR QUEJA</legend>
            <label for="codigo_queja">Introduce el código de la queja:</label><br>
            <input type="text" id="consultarqueja" name="consultarqueja" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <script src="main.js" charset="utf-8"></script>
</body>

</html>