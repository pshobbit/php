<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13.02.php</title>
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if($a > $b)
        {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

        if($b > $c)
        {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

        if($a > $b)
        {
            $aux = $a;
            $a = $b;
            $b = $aux;
        }

        echo "Los números introducidos ordenados de menor a mayor son $a, $b y $c.";
    ?>
    <br>
    <a href="13.01.php">>>Volver</a>
</body>
</html>