<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio22.php</title>
</head>
<body>
    <?php
        echo "Números primos entre 2 y 100: <br>";

        for($n = 2; $n <= 100; $n++)
        {
            $esPrimo = true;
            for($i = 2; $i <($n/2)+1; $i++)
            {
                if($n % $i ==0)
                {
                    $esPrimo = false;
                }
            }
            if($esPrimo)
            {
                echo "$n&nbsp;";
            }
        }
    ?>
    <br>
    <a href="ejercicio22.php">>> Volver</a>
</body>
</html>