<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11.02.php</title>
</head>
<body>
    <?php
        echo $_POST['kb'], " Kb son ", round($_POST['kb'] / 1024, $precision = 2), " Mb.";
    ?>
    <br><br>
    <a href="11.01.php">>> Volver</a>
</body>
</html>