<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05.02. Tanda 1. Tema 2</title>
</head>
<body>
    <?php
    echo "El Área del rectángulo es ";
    echo round($_POST['ancho'] * $_POST['alto'], $precision = 2), " cm<sup>2</sup>";
    ?>
</body>
</html>