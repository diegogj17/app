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
            function crearRandom()
            {
                $guardar = "";
                for ($i = 0; $i < 6; $i++) {
                    $numero = rand(0, 9);
                    $guardar .= $numero;
                }
                return $guardar;
            }
            $array = array('305890', '123630');
            do {
                $mostrar = crearRandom();
            } while (in_array($mostrar, $array));
           
        ?>
</body>
</html>