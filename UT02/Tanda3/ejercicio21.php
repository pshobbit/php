<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio21.php</title>
</head>
<body>

    <?php
    if(!isset($_POST['n'])) {
        $n = 0;
        $cuentaNumeros = 0;
        $sumaImpares = 0;
        $cuentaImpares = 0;
        $mayorPar = -PHP_INT_MAX;
    } else {
        $n = $_POST['n'];
        $cuentaNumeros = $_POST['cuentaNumeros'];
        $sumaImpares = $_POST['sumaImpares'];
        $cuentaImpares = $_POST['cuentaImpares'];
        $mayorPar = $_POST['mayorPar'];
    }
    if($n > 0)
    {
        $cuentaNumeros++;
        if($n % 2 == 0)
        {
            if($n > $mayorPar)
            {
                $mayorPar = $n;
            }
        } else {
            $cuentaImpares++;
            $sumaImpares += $n;
        }
    }
    if(!isset($_POST['n']) || ($n > 0)) {
        ?>
        Introduzca el número, si quiere terminar, introduzca un número negativo.
        <form action="ejercicio21.php" method="post">
            <input type="number" name="n" autofocus=""><br>
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
            <input type="hidden" name="cuentaImpares" value="<?php echo $cuentaImpares; ?>">
            <input type="hidden" name="mayorPar" value="<?php echo $mayorPar; ?>">
            <input type="submit" value="Aceptar">
        </form>
    <?php
    }
    if($n < 0)
    {
        echo "Se han introducido $cuentaNumeros números <br>";
        if($cuentaImpares != 0){
            echo "La media de los impares es ".($sumaImpares / $cuentaImpares);
        } else {
            echo "Habían 0 impares ";
        } 
        echo "<br>";
        if($mayorPar == -PHP_INT_MAX) {
            echo "No hay mayor par ";
        } else {
            echo "El mayor de los pares es $mayorPar<br> ";
        }
    }
    ?>
    <br>
    <a href="ejercicio21.php">>>Volver</a>
</body>
</html>