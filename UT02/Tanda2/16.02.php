<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16.02.php</title>
</head>
<body>
    <?php
        $n = $_POST['n'];
        echo "La última cifra de $n es ", $n % 10;
    ?>
    <br>
    <a href="16.01.php"></a>
    
</body>
</html>