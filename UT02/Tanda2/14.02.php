<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14.02.php</title>
</head>
<body>
    <?php
        $n = $_POST['n'];
    
        if($n % 2)
        {
            echo "El número introducido es impar.";
        }
        else{
            echo "El número introducido es par";
        }

        if($n % 5)
        {
            echo " y no es divisible entre 5.";
        }
        else{
            echo " y es divisible entre 5.";
        }
    ?>
    <br>
    <a href="14.01.php">>>Volver</a>
</body>
</html>