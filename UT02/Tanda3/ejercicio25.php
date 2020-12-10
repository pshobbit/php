<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
    ?>
            Por favor, introduzca un número entero (2 cifras para ver el resultado):
            <form action="ejercicio25.php" method="post">
                <input type="number" name="n" autofocus="" required=""><br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } else {
            $n = $_POST['n'];
            $volteado = 0;
            
            // abs -> Valor Absoluto de un número
            $numero = abs($n);

            while($numero > 0)
            {
                $volteado = ($volteado * 10) + ($numero % 10);
                $numero = floor($numero / 10);
            }

            if($n < 0)
            {
                $volteado = - $volteado;
            }
            echo "Si le damos la vuelta al $n tenemos el $volteado";

        }
    ?>
    <br>
    <a href="ejercicio25.php">>>Volver</a>

    
</body>
</html>