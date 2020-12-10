<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
    <body>
        <?php
            if(!isset($_POST['n'])){
        ?>
            Por favor, introduzca un número del 0 al 10:;
            <form action="ejercicio8.php" method="post">
                <input type="number" name="n" min="0" max="10"><br>
                <input type="submit" value="Aceptar">
            </form>
        }
        <?php
        else{
            echo "<table>";
            $n = $_POST['n'];
            echo "Tabla del $n<br><br>";
            for($i = 0; $i < 11; $i++)
            {
                echo "<tr><td>$n x $i = ".$n*$i." </td></tr>";
            }
            echo "</table>";
        }
        ?>
    </body>
</html>