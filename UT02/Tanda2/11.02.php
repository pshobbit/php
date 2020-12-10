<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.02.php</title>
</head>
<body>
    <?php
        $hora = $_POST['hora'];
        $minutos = $_POST['minuto'];

        $segundosTranscurridos = ($hora * 3600) + ($minuto * 60);
        $segundosHastaMediaNoche = (24 * 3600) - $segundosTranscurridos;

        echo "Desde las $hora:$minutos hasta la medianoche faltan: $segundosHastaMediaNoche segundos.";

    ?>
    <br>
    <a href="11.01.php">>>Volver</a>
    
</body>
</html>