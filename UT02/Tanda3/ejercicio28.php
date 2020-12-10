<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio28.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
    ?>
            <h3>Introduzca un número entero mayor que 1:</h3>
            <form action="ejercicio28.php" method="post">
                <input type="number" name="n" min="1" autofocus="" required=""> <br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } else{
            $n = $_POST['n'];
            $factorial = 1;

            echo "!$n = ";
            for($i = $n; $i >= 1; $i--)
            {
                echo $i,"*";
                $factorial = $factorial * $i;
            }
            echo "= $factorial";
        }
    ?>
    <br>
    <a href="ejercicio28.php">>>Volver</a>
    
</body>
</html>