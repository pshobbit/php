<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02.02.php</title>
</head>
<body>
    <?php
        $hora = $_POST['hora'];

        if(($hora >= 6)&&($hora <= 11))
        {
            echo "Buenos días.";
        }
        if(($hora >= 12) && ($hora <= 20))
        {
            echo "Buenas tardes.";
        }

        if(($hora >= 21) && ($hora < 24) || ($hora <= 5) && ($hora >= 0))
        {
            echo "Buenas noches.";
        }          
        if(($hora >= 24) || ($hora < 0))
        {
            echo "La hora introducida no es correcta.";
        }
        

    ?>
    <br><br>
    <a href="02.01.php">>>Volver</a>
</body>
</html>