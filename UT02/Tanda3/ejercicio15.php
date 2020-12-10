<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['base'])){
    ?>
        Este programa calcula una serie de potencias sucesivas a partir de la base y el exponente.<br>
        <form action="ejercicio15.php" method="post">
            Base: <input type="number" name="base" autofocus><br>
            Exponente: <input type="number" name="exponenteFinal"><br>
            <input type="submit" value="Aceptar">
        </form>
    <?php
    } else {
        $base = $_POST['base'];
        $exponenteFinal = $_POST['exponenteFinal'];

        for($i = 0; $i <= $exponenteFinal; $i++) {
            $potencia = 1;
            $exponente = $i;

            for($j = 0; $j < $exponente; $j++){
                $potencia = $potencia * $base;
            }
            echo "$base<sup>$exponente</sup> = $potencia <br>";
        }
    }
    ?>

    <br>
    <a href="ejercicio15.php">>> Volver</a>
    
</body>
</html>