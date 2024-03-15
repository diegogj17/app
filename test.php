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
        echo $row["Estado"] . "<br>";
        };

    }else{
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
    <?php echo '<p> Samuel putero </p>'; ?>
    <?php echo '<p>Dame mis patatah</p>'; ?>
    
    <?php echo '<p>Alesito cani</p>'; ?>
</body>
</html>