<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2.php</title>
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

      if ($contadorNumeros == 10)
      {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
        $numero = explode(" ", $numeroTexto);
        $maximo = -PHP_INT_MAX;
        $minimo = PHP_INT_MAX;


        foreach ($numero as $n)
         {
          if ($n < $minimo) {
            $minimo = $n;
          }
          if ($n > $maximo)
           {
            $maximo = $n;
          }
        }

        foreach ($numero as $n)
         {
          echo "$n";
          if ($n == $minimo)
          {
            echo " mínimo";
          }
          if ($n == $maximo)
           {
            echo " máximo";
          }
          echo "<br>";
        }
    ?>
        <br>
        <a href="02.php">>> Volver</a>
    <?php
      }
      if ($contadorNumeros < 10) 
       {
    ?>
        <form action="ejercicio2.php" method="get">
          Introduzca un número:
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