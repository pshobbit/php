<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06.02.php</title>
</head>
<body>
    <?php
        echo "El área del triángulo es: ";
        echo round(($_POST['ancho'] * $_POST['alto']) / 2, $precision = 2), "cm<sup>2</sup>";
    ?>
    <br><br>
    <a href = "06.01.php">>>Volver</a>
</body>
</html>