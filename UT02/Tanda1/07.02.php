<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07.02.php</title>
</head>
<body>
    <?php
        echo "El total de la factura es ";
        echo round($_POST['baseImponible'] * 1.21, $precision = 2), " euros.";

    ?>    
    <br><br>
    <a href="07.01.php">>> Volver</a>
</body>
</html>