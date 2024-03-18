<?php
include ("pablo.php");

$sql = "SELECT * FROM solutia";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["Id"] . "<br>";
        echo $row["Fecha"] . "<br>";
        echo $row["Asunto"] . "<br>";
        echo $row["Mensaje"] . "<br>";
        echo $row["Estado"] . "<br>";
    }
    ;

} else {
    echo "Ningun usuario";
}

mysqli_close($conn);
 ?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    
    $array = arrayTXT();
    $texto = sacarTexto('000002');
    do{
    $mostrar = crearRandom();
    }while(in_array($mostrar, $array));
    echo"".$mostrar."";
    echo"".$texto."";
    

    function crearRandom()
    {
        $guardar = "";
        for ($i = 0; $i < 6; $i++) {
            $numero = rand(0, 9);
            $guardar .= $numero;
        }
        return $guardar;
    }

    function arrayTXT()
    {
        include ("pablo.php");
        $ideses = array();
        $tabla = "SELECT `Id` FROM solutia";
        $resultado = mysqli_query($conn, $tabla);
        $contador = 0;
        while ($row = mysqli_fetch_assoc($resultado)) {
            // echo $row["Id"] . "<br>";
    
            $ideses[$contador] = $row["Id"];
            $contador++;

        }
        ;
        mysqli_close($conn);
        return $ideses;
    }
    function sacarTexto($id){
        include("pablo.php");
        $definitivo = "";
        $variable = "SELECT `Asunto`, `Mensaje`  FROM solutia WHERE Id = $id";
        $result = mysqli_query($conn,$variable);
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["Asunto"] . "<br>";
            echo $row["Mensaje"] . "<br>";  
            $definitivo.=$row["Asunto"] . $row["Mensaje"];
        }
        mysqli_close($conn);
        return $definitivo;
    }
    ?>
</body>

</html>