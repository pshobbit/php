<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n'])){
        ?>
            Introduzca un número para saber si es primo o no. <br>
            <form action="ejercicio16.php" method="post">
                <input type="number" name="n" min="0" autofocus><br>
                <input type="submit" value="Aceptar">
            </form>

        <?php
        } else{
            $n = $_POST['n'];

            if(($n == 0) || ($n == 1)) {
                $esPrimo = false;

            } else {
                $esPrimo = true;
                
                for($i = 2; $i <= $n/2; $i++){
                    if($n % $i == 0){
                        $esPrimo = false;
                    }
                }
            }
            if($esPrimo){
                echo "El $n es primo.";
            } else {
                echo "El $n no es primo.";
            }
        }
    ?>
    <br>
    <a href="ejercicio16.php">>> Volver</a>
</body>
</html>