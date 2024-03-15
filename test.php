<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    do{
        $array = array('305890','123630');
    $mostrar = crearRandom();
    comprobarNumero($array, $mostrar);
    echo"".$mostrar."";
    }while(in_array($mostrar, $array));
    

    function crearRandom(){
        $guardar = "";
        for ($i = 0; $i < 6; $i++) {
            $numero = rand(0, 9);
            $guardar .= $numero;
        }
        return $guardar;
    }
    function comprobarNumero($array, $numero){
            if(!in_array( $numero,$array)){
                echo"Es correcto";
            }else{
                echo "Este numero ya existe, te genero uno nuevo";
            }
    }
        
    
    

    ?>
</body>
</html>