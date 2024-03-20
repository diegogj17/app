<?php
function insertar($Asunto, $Mensaje)
{
    include ("includeBDD.php");

    $id = crearRandom();
    $Asunto = mysqli_real_escape_string($conn, $Asunto);
    $Mensaje = mysqli_real_escape_string($conn, $Mensaje);

    $sql = "INSERT INTO solutia (Id,  Fecha, Asunto, Mensaje)
                        values ('$id', NOW(), '$Asunto', '$Mensaje')";

    mysqli_query($conn, $sql);

    //Poner email del abogado a la que se le envia la denuncia
    $para = '';


    mail($para, $Asunto, $Mensaje);


    mysqli_close($conn);
    return $id;
}

function actualizar($Id,$Respuesta){
    include ("includeBDD.php");

    $sql = "UPDATE solutia set `Respuesta` = '$Respuesta' where Id = $Id";
    
    $hola=mysqli_query($conn, $sql);
    mysqli_close($conn);
}
function insertarConID($id, $Asunto, $Mensaje)
{
    include ("includeBDD.php");
    $Asunto = mysqli_real_escape_string($conn, $Asunto);
    $Mensaje = mysqli_real_escape_string($conn, $Mensaje);

    $sql = "INSERT INTO solutia (Id,  Fecha, Asunto, Mensaje)
                        values ('$id', NOW(), '$Asunto', '$Mensaje')";

    mysqli_query($conn, $sql);

    //Poner email del abogado a la que se le envia la denuncia
    $para = '';


    mail($para, $Asunto, $Mensaje);


    mysqli_close($conn);
    return $id;
}
function crearRandom()
{
    $arrayID = addIDtoArray();
    do {
        $guardar = "";
        for ($i = 0; $i < 6; $i++) {
            $numero = rand(0, 9);
            $guardar .= $numero;
        }
    } while (in_array($guardar, $arrayID));
    return $guardar;
}

function addIDtoArray()
{
    include ("includeBDD.php");
    $ideses = array();
    $tabla = "SELECT `Id` FROM solutia";
    $resultado = mysqli_query($conn, $tabla);
    $contador = 0;
    while ($row = mysqli_fetch_assoc($resultado)) {
        $ideses[$contador] = $row["Id"];
        $contador++;
    }
    ;
    mysqli_close($conn);
    return $ideses;
}
function sacarTexto($id)
{
    include ("includeBDD.php");
    $definitivo = "";
    $variable = "SELECT `Asunto`, `Mensaje`, `Respuesta`  FROM solutia WHERE Id = $id";
    $result = mysqli_query($conn, $variable);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $definitivo .= "Asunto: " . $row["Asunto"] . "<br>" . "Mensaje: " . $row["Mensaje"] . "<br>" . $row["Respuesta"];
        }
    } else {
        echo "No existe ese id";
    }
    mysqli_close($conn);
    return $definitivo;
}
function prepararTexto($id){
    include ("includeBDD.php");
    $existir = false;
    $definitivo = "";
    $variable = "SELECT `Asunto`, `Mensaje`, `Respuesta`  FROM solutia WHERE Id = $id";
    $result = mysqli_query($conn, $variable);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $definitivo .= "Asunto: " . $row["Asunto"] . "<br>" . "Mensaje: " . $row["Mensaje"] . "<br>" . $row["Respuesta"];
        }
        $existir=true;
    } else {
        echo "No existe ese id";
        $existir=false;
    }
    mysqli_close($conn);
    return $existir;
}
?>

