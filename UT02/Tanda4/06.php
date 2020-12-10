<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6.php</title>
</head>
<body>
    <?php
        if(!isset($_GET['n']))
        {
            $contadorNumeros = 0;
            $numeroTexto = '';
            $n = '';
        } else {
            $contadorNumeros = $_GET['contadorNumeros'];
            $numeroTexto = $_GET['numeroTexto'];
            $n = $_GET['n'];
            $numeroTexto = $numeroTexto.' '.$n;
            $contadorNumeros++;
        }
        if($contadorNumeros < 8)
        {
    ?>
            <form action="06.php" method="get">
                Introduzca 8 números:
                <input type="number" name="n" autofocus="" required="">
                <input type="hidden" name="contadorNumeros" value="<?= $contadorNumeros ?>">
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto ?>">
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } else{
            $numero = explode(" ", substr($numeroTexto, 1));

            foreach($numero as $n)
            {
                if($n % 2 == 0)
                {
                    echo "<span style=\"color: magenta;\">$n&nbsp;</span>";
                } else {
                    echo "<span style=\"color: green;\">$n&nbsp;</span>";
                }
            }
            echo "<span style=\color: magenta;\"><br>Pares<br></span>";
            echo "<span style=\color: green;\"<br>Impares<br></span>";
        ?>
        <br>
        <a href="06.php">>>Volver</a>
    <?php
        }
    ?>
    
</body>
</html>