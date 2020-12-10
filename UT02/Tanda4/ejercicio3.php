<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3.php</title>
</head>
<body>
       
    
<?php
    if (!isset($_GET['n'])) 
    {
        $contadorNumeros = 0;
        $numeroTexto = "";
        $n = "";
     } else {
        $n = $_GET['n'];
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
    }

      if ($contadorNumeros == 15) 
    {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes

        $numero = explode(" ", $numeroTexto);


        echo "Array original:<br>";

        echo "<table><tr>";

    for ($i = 0; $i < 15; $i++) 
    {
      echo "<td>$i</td>";
    }

        echo "</tr>";

    for ($i = 0; $i < 15; $i++) 
    {
        echo "<td>".$numero[$i]."</td>";
    }

        echo "</tr></table>";

        $aux = $numero[14];

    for ($i = 14; $i > 0; $i--)
    {
       $numero[$i] = $numero[$i - 1];
    }
        $numero[0] = $aux;

        echo "<br>Array rotado:<br>";
        echo "<table><tr>";

    for ($i = 0; $i < 15; $i++) 
    {
        echo "<td>$i</td>";
    }

        echo "</tr>";

    for ($i = 0; $i < 15; $i++)
    {
        echo "<td>".$numero[$i]."</td>";
    }

        echo "</tr></table>";
?>
    <br>
        <a href="ejercicio3.php">>> Volver</a>
<?php
    }

    if ($contadorNumeros < 15)
    {
?>
    <form action="ejercicio3.php" method="get">
        Introduzca 15 números:
        <input type="number" name ="n" autofocus>
        <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
        <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
        <input type="submit" value="OK">
    </form>
<?php
    }
?>
</body>
</html>