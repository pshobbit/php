<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_POST['num'])){
    ?>
     Indroduce un número para saber cuantas cifras tiene.<br>
     <form action="ejercicio9.php" method="post">
        <input type="number" name="num">
        <input type="submit" value="Aceptar">
     </form>

     <?php
    } else{
        $num = $_POST['num'];
        $cantidad = strlen($num);
        echo "El numero $num tiene $cantidad cifras.";

    }
    ?>
    <br>
    <a href="ejercicio9.php">>>Volver</a>
</body>
</html>