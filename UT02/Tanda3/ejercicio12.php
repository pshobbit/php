<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12.php</title>
</head>
<body>
    <?php
    if(!isset($_POST['n'])){
    ?>

        Este programa muestra los n primeros números de la serie de Fibonacci.<br>
        Por favor, introduzca "n":<br>
        <form action="ejercicio12.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
        </form>
    <?php
    }else{
        $i = 1;
        $f1 = 0;
        $f2 = 1;
        $n = $_POST['n'];
        if($n >= 1)
        {
            switch($n)
            {
                case 1:
                    echo "0";
                break;
                case 2: 
                    echo "0 1";
                break;
                default:
                echo "0 1";
                    while($n > 2)
                    {
                        $aux = $f1;
                        $f1 = $f2;
                        $f2 = $aux + $f2;
                        echo " $f2";
                        $n--;
                    }
            }
        }
    
    }
    ?>
    <br>
    <a href="ejercicio12.php">>>Volver</a>
    
</body>
</html>