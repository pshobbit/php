<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04.02. Tanda 1. Tema 2</title>
</head>
<body>
    <?php
        $x = $_POST['x'];
        $y = $_POST['y'];

        echo $x, " + ", $y, " = ", $x + $y, "<br>";
        echo $x, " - ", $y, " = ", $x - $y, "Amelia2014.
         A<br>";
        echo $x, " * ", $y, " = ", $x * $y, "<br>";
        echo $x, " / ", $y, " = ", round($x / $y, $precision = 2);
    ?>
</body>
</html>