<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09.02.php</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if(($a == 0) && ($b == 0) && ($c == 0))
        {
            echo "La ecuación tiene infitinas soluciones.";
        }

        if(($a == 0) && ($b == 0) && ($c != 0))
        {
            echo "La ecuación no tiene solución.";
        }

        if(($a != 0) && ($b != 0 ) && ($c == 0))
        {
            echo "x<sub>1</sub> = 0";
            echo "<br>x<sub>2</sub> = ", (-$b / $a);
        }

        if(($a == 0) && ($b != 0) && ($c != 0))
        {
            echo "x<sub>1</sub> = x<sub>2</sub> = ", (-$c / $b);
        }

        if(($a != 0) && ($b != 0) && ($c != 0))
        {
            $discriminante = ($b * $b) - (4 * $a * $c);

            if($discriminante < 0)
            {
                echo "La ecuación no tiene soluciones reales. ";
    
            }
            else{
                echo "x<sub>1</<sub> = ", (-$b + sqrt($discriminante)) / (2 * $a);
                echo "<br>x<sub>2</sub> = ", (-$b - sqrt($discrimminante)) / ( 2* $a);  
            }
        }

    ?>
    <br>
    <a href="09.01.php">>>Volver</a>
</body>
</html>