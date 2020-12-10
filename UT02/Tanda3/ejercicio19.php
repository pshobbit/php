<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
    ?>  
            <form action="ejercicio19.php" method="post">
                Dime la altura de la pirámide: <input type="number" name="n"> <br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } 
        else
        {
            $altura = $_POST['n'];
            $espacios = 0;
            $asteriscos = 0;

            for($i = 0; $i < $altura; $i++)
            {
                $asteriscos = $i + 1;
                $espacios = $altuta - $asteriscos;

                for($j = 0; $j < $espacios; $j++)
                {
                    echo " ";
                }
                for($j = 0; $j < $asteriscos; $j++)
                {
                    echo "*";
                }
                for($j = 0; $j < $asteriscos -1; $j++)
                {
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>
    <br>
    <a href="ejercicio19.php">>>Volver</a>
</body>
</html>