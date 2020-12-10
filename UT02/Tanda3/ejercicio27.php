<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n'])){
    ?>
            Introduzca un número entero mayor que 1:
            <form action="ejercicio27.php" method="post">
                <input type="number" name="n" min="1" autofocus="" required=""> <br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } else{
            $n = $_POST['n'];
            $cuenta = 0;
            $suma = 0;

            for($i = 1; $i <= $n; $i++)
            {
                if(($i % 3) == 0)
                {
                    echo "$i ";
                    $cuenta++;
                    $suma += $i;
                }
            }
            echo "<br>Desde 1 hasta $n hay $cuenta múltiplos de 3 y suman $suma.";
        }
    ?>
    <br>
    <a href="ejercicio27.php">>> Volver</a>
</body>
</html>