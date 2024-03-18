<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>O QUE NO FUNCIONA</p>
<?php


// Aquí puedes usar la variable $mostrar

echo "<p>El valor de mostrar es: " . $mostrar . "</p>";

// Además, aquí puedes procesar los datos del formulario enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $asunto = $_POST["asunto"];
    $queja = $_POST["queja"];

    // Realizar cualquier otro procesamiento necesario
}
?>

</body>
</html>