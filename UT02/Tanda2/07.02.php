<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07.01.php</title>
</head>
<body>
    <?php
        echo "La nota media es ";
        echo round(($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3, $precision = 2);

    ?>
    <br>
    <a href="07.01.php">>>Volver</a>
</body>
</html>