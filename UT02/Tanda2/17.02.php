<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17.02.php</title>
</head>
<body>
    <?php
        $n = $_POST['n'];

        if($n < 0)
        {
            $primera = n;
        }
        if($n < 10)
        {
            $primera = n / 10;
        }
        if(($n >= 10) && ($n < 100))
        {
            $primera = $n / 10;
        }
        if(($n >= 100) && ($n < 1000))
        {
            $primera = $n / 100;
        }
        if(($n >= 1000) && ($n < 10000))
        {
            $primera = $n / 1000;
        } 
        if($n >= 10000)
        {
            $primera = $n / 10000;
        }
        echo "La primera cifra del número introducido es ", floor($primera);
    ?>
    <br>
    <a href="17.01.php">>> Volver</a>
</body>
</html>