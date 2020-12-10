<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04.02.php</title>
</head>
<body>
    <?php
        $horasT = $_POST['horasT'];
        
        if($horasT < 40)
        {
            $sueldoSemanal = 12 * $horasT;
        }
        else{
            $sueldoSemanal = (40*12) + (($horasT - 40) * 16);
        }
        echo"El sueldo semanal que le corresponde es de $sueldoSemanal euros";

    ?>
    <br>
    <a href="04.01.php">>> Volver</a>
</body>
</html>