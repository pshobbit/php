<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.1. Tanda 1. Tema 2</title>
</head>
<body>
    <?php
    echo $_POST['pesetas'], " pesetas son ";
    echo round($_POST['pesetas'] / 166.36, $precision = 2), " euros.";
    ?>
</body>
</html>