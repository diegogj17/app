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
        echo $row["Estado"] . "<br>";
        };

    }else{
        echo "Ningun usuario";
    }

    mysqli_close($conn);
 ?> -->


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
    $IDD = sacarTexto('305890');
    }while(in_array($mostrar, $array));
    echo"".$mostrar."";
    echo $IDD;

    

    function crearRandom(){
        $guardar = "";
        for ($i = 0; $i < 6; $i++) {
            $numero = rand(0, 9);
            $guardar .= $numero;
        }
        return $guardar;
    }
    function sacarTexto($id){
        include("pablo.php");

        $variable = "SELECT * FROM solutia WHERE Id = $id";
        $result = mysqli_query($conn,$variable);
        mysqli_close($conn);
        
        return $variable;
    }
  
    ?>
    </body>
</html>