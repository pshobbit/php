<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n'])) {
    ?>
    Por favor, introduzca un número entero positivo.<br>
        <form action="ejercicio17.php" method="post">
            <input type="number" name="n" min="0" autofocus=""><br>
            <input type="submit" value="Aceptar">
        </form>
    <?php
    } else{
        $suma = 0;
        $suma = $_POST['n'];
        for($i = $n + 1; $i < $n + 101; $i++){
            $suma += $i;
        }

        echo "La suma de los 100 números enteros siguientes a $n es $suma.";
    }
    ?>
    <br>
    <a href="ejercicio17.php">>>Volver</a>
    
</body>
</html>
