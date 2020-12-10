<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio26.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['n']))
        {
    ?>
            <form action="ejercicio26.php" method="post">
                Introduzca un número entero: <input type="number" name="n" min="0" autofocus="" required=""><br>
                Introduzca un dígito: <input type="number" name="digito" main="0" max="9" required=""><br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } else{
            $n = $_POST['n'];
            $digito = $_POST['digito'];
            $volteado = 0;
            $longitud = 0;
            $posicion = 0;
            
            echo "Contando de izquierda a derehca, el $idigto aparece dentro de $n en las siguientes posiciones: &nbsp";

            $numero = $n;
            if($numero == 0)
            {
                $longitud = 1;
            }
            // duda

            while($numero > 0)
            {
                $volteado = ($volteado * 10) + ($numero % 10);
                $numero = floor($numero / 10);
                $longitud++;
            }
            
            while($volteado > 0)
            {
                if(($volteado % 10 ) == $digito)
                {
                    echo "$posicion&nbsp;&nbsp;";
                }
                $volteado = floor($volteado / 10);
                $posicion++;
            }
        }

    ?>
        <br>
        <a href="ejercicio26.php">>> Volver</a>
    
</body>
</html>