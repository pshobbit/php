<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06.02.php</title>
</head>
<body>
    <?php
        $h = $_POST['h'];
        $g = 9.81;
        $s = sqrt(2* $h / $g);

        echo "El objeto tarda ", round($s, $precision=2), "segundos en caer.";
    ?>
    <br>
    <a href="06.01.php">>>Volver</a>
    
</body>
</html>