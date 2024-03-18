<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "solutia";
    
    

    $conn =mysqli_connect($db_server, $db_user, $db_pass,$db_name);   


    if ($conn) {
        echo "Estas conectado";

    }else{
        echo "No estas conectado";
    }
?>