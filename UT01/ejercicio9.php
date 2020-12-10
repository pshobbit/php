<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
    $pesetas = 1000;
    $euros = round($pesetas / 166.386, 2);
    echo $pesetas, " pesetas son ", " euros ", $euros;

    ?>
</body>
</html>