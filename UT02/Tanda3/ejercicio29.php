<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio29.php</title>
</head>
<body>
    <?php
        if(!isset($_POST['numeroGrande'])){
    ?>
            <form action="ejercicio29.php" method="post">
                Introduzca un número entero positivo (relativamente grande):
                <input type="number" name="numeroGrande" min="0" autofocus="" required=""><br>
                Introduzca otro número (relativamente pequeño):
                <input type="number" name="numeroPequenno" min="0" required=""><br>
                <input type="submit" value="Aceptar">
            </form>
    <?php
        } else{
            $numeroGrande = $_POST['numeroGrande'];
            $numeroPequenno = $_POST['numeroPequenno'];
            $cuenta = 0;
            $suma = 0;

            echo "Los números enteros positivos menores que $numeroGrande";
            echo " que son divisibles entre $numeroPequenno son los siguientes: <br>";

            for($i = 1; $i < $numeroGrande; $i++)
            {
                if(($i % $numeroPequenno) != 0)
                {
                    echo "$i ";
                }
            }
        }
    ?>
        <br>
        <a href="ejercicio29.php">>> Volver</a>
    
</body>
</html>