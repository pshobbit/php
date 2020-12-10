<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.02.php</title>
</head>
<body>
    <?php
        echo "Conversor de Mb a Kb: ";
        echo $_POST['mb'], " Mb son ", $_POST['mb'] * 1024, " Kb.";
    ?>
    <br><br>
    <a href="10.01.php">>>Volver</a>
</body>
</html>