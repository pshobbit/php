<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12.02.php</title>
</head>
<body>
    <?php
        $puntos = $_POST['r1'] + $_POST['r2'] + $_POST['r3'] + $_POST['r4'] + $_POST['r5'];
        echo "Ha obtenido $puntos puntos.";
    ?>
    <br>
    <a href="12.01.php">>>Volver</a>
</body>
</html>