

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
    
    $array = array('305890','123630');
    do{
    $mostrar = crearRandom();
    }while(in_array($mostrar, $array));

    insertar("Pablo denuncia", "Quiero denunciar al edu");
    function crearRandom(){
        $guardar = "";
        for ($i = 0; $i < 6; $i++) {
            $numero = rand(0, 9);
            $guardar .= $numero;
        }
        return $guardar;
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