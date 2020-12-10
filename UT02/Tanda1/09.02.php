<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09.01.php</title>
</head>
<body>
    <?php
        echo "El volumen del cono es: ";
        $v = (1 / 3) * Math.pi() * $_POST['r'] * $_POST['r'] * $_POST['h'];
        echo round($v, $precision = 2), " cm<up>2</sup>";
    ?>
    <br><br>
    <a href="09.01.php">>>Volver</a>
    
</body>
</html>