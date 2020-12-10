<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio23.php</title>
</head>
<body>
    <?php
    // INICIALIZA VARIABLES
    if(!isset($_POST['n']))
    {
        $n = 0;
        $suma = 0;
        $numeroDeElementos = -1;
    }else{
        $n = $_POST['n'];
        $suma = $_POST['suma'];
        $numeroDeElementos = $_POST['numeroDeElementos'];
    }
    if($suma < 10000)
    {
        $suma += $n;
        $numeroDeElementos++;
    }
    if((!isset($_POST['n'])) ||($suma < 10000))
    {
        ?> 
        Introduzca un número. El programa seguirá pidiendo números mientras la suma de ellos sea inferior a 10000. <br>
        <form action="ejercicio23.php" method="post">
            <input type="number" name="n" autofocus=""><br>
            <input type="hidden" name="numeroDeElementos" value="<?php echo $numeroDeElementos; ?>">
            <input type="hidden" name="suma" value="<?php echo $suma; ?>">
            <input type="submit" value="Aceptar">
        </form>
        <?php
    }   
    if($suma >= 10000)
    {
        echo "Ha introducido un total de $numeroDeElementos números.<br>";
        echo "La suma total es $suma<br>";
        echo "La media es ".($suma/$numeroDeElementos);
    }
    ?>
    <br>
    <a href="ejercicio23.php">>> Vovler</a>


</body>
</html>