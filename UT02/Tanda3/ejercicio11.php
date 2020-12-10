<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11.php</title>
</head>
<body>
    <?php
    if(!isset($_POST['n'])){
    ?>
        Por favor, introduzca un número entero: <br>
        <form action="ejercicio11.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
    <?php
    } else {
        $n = $_POST['n'];
        echo "<table><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
        for($i = $n; $i < $n + 5; $i++)
        {
            echo "<tr><td>$i</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
        }
        echo "</table>";
        echo '<br><a href="ejercicio11.php">>>Volver</a>';
    }

    ?>
</body>
</html>