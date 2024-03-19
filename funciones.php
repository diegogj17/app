

<?php
function insertar($Asunto, $Mensaje){
    include("pablo.php");
    
    $id = crearRandom();
    $Asunto = mysqli_real_escape_string($conn, $Asunto);
    $Mensaje = mysqli_real_escape_string($conn, $Mensaje);
    
    $sql = "INSERT INTO solutia (Id,  Fecha, Asunto, Mensaje)
                        values ('$id', NOW(), '$Asunto', '$Mensaje')";

    mysqli_query($conn,$sql);

    //Poner email del abogado a la que se le envia la denuncia
    $para = '';

    
    mail($para,$Asunto, $Mensaje);

    
    mysqli_close($conn);
    return $id;
}
    function crearRandom()
    {
        $arrayID = addIDtoArray();
        do{
            $guardar = "";
            for ($i = 0; $i < 6; $i++) {
                $numero = rand(0, 9);
                $guardar .= $numero;
            }
            }while(in_array($guardar, $arrayID));
        return $guardar;
    }

    function addIDtoArray()
    {
        include ("pablo.php");
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
    function sacarTexto($id){
        include("pablo.php");
        $definitivo = "";
        $variable = "SELECT `Asunto`, `Mensaje`  FROM solutia WHERE Id = $id";
        $result = mysqli_query($conn,$variable);
        if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $definitivo.=$row["Asunto"] . $row["Mensaje"];
        }}else{
            echo"No existe ese id maquina";
        }
        mysqli_close($conn);
        return $definitivo;
    }
    ?>

<!-- <?php
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
?> -->