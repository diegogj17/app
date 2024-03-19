

<?php
function insertar($Asunto, $Mensaje){
    include("pablo.php");
    
    $Id = crearRandom();
    $Asunto = mysqli_real_escape_string($conn, $Asunto);
    $Mensaje = mysqli_real_escape_string($conn, $Mensaje);
    
    $sql = "INSERT INTO solutia (Id,  Fecha, Asunto, Mensaje)
                        values ('$Id', NOW(), '$Asunto', '$Mensaje')";

    mysqli_query($conn,$sql);

    $para = "pablitoesta@gmail.com";
    $asuntoCorreo = "Nuevo mensaje: $Asunto";
    $mensajeCorreo = $Mensaje;

    
    mail($para, $asuntoCorreo, $mensajeCorreo);

    
    mysqli_close($conn);
}
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
    echo"".$texto."";

    insertar("Pablo denuncia", "Quiero denunciar al edu");
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

<?php
    include("pablo.php");

    $sql = "SELECT * FROM solutia";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
        echo $row["Id"] . "<br>";
        echo $row["Fecha"] . "<br>";
        echo $row["Asunto"] . "<br>";
        echo $row["Mensaje"] . "<br>";
        echo "<br>";
        };

    }else{
        echo "Ningun usuario se ha insertado";
    }

    mysqli_close($conn);
?>