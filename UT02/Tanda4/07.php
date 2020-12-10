<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07.php</title>
</head>
<body>
    <?php
        for($i = 0; $i < 20; $i++)
        {
            $numero[$i] = rand(0,100); // genera array aleatorio de 0 a 100
        }

        echo "Array original: <br>";
        echo "<table><tr>";
        for($i = 0; $i < 20; $i++)
        {
            echo "<td>$i</td>";
        }
        echo "</tr>";

        for($i = 0; $i < 20; $i++)
        {
            echo "<td>".$numero[$i]."</td>";
        }
        echo "</tr></table>";

        $guardaPares = 0;
        $guardaImpares = 0;

        for($i = 0; $i < 20; $i++)
        {
            if($numero[$i] % 2 == 0)
            {
                $pares[$cuentaPares] = $numero[$i];
                $cuentaPares++;
            } else{
                $impares[$cuentaImpares] = $numero[$i];
                $cuentaImpares++;
            }
        }

        for($i = 0; $i < $cuentaPares; $i++)
        {
            $numero[$i] = $pares[$i];

        }

        for($i = $cuentaPares; $i < $cuentaPares + $cuentaImpares; $i++)
        {
            $numero[$i] = $impares[$i - $cuentaPares];
        }

        echo "<br>Array resultante con los pares al principio y los impares al final:<br>";

        echo "<table><tr>";

        for($i = 0; $i < 20; $i++)
        {
            echo "<td>".$numero[$i]."</td>";
        }
        echo "</tr></table>";
    ?>
        <br>
        <a href="07.php">>>Volver</a>
    
</body>
</html>