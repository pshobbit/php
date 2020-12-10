<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05.02.php</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        if($a == 0)
        {
            echo "Esa ecuación no tiene solución real.";
        }
        else{
            echo "x = ", (-$b / $a);
        }

    ?>
    <br>
    <a href="05.01.php">>>Volver</a>
</body>
</html>