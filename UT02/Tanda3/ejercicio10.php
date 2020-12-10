<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    Este programa calcula la media d elos números introducidos.<br>
    Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
    <?php
        if(!isset($_POST['n']))
        {
            $n = 0;
            $total = 0;
            $cuentaNumeros = 0;
        } else {
            $n = $_POST['n'];
            $total = $_POST['total'];
            $cuentaNumeros = $_POST['cuentaNumeros'];
        }

        if($n >= 0){
            $total += $n;
            $cuentaNumeros++;
            ?>
            <form action="ejercicio10.php" method="post">
                <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cunetaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
            </form>
        <?php
        }
        else{
        ?>
            <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros -1); ?>
            <br><br>

            <a href="ejercicio10.php">>> Volver</a>
            <?php
        }

    ?>
</body>
</html>