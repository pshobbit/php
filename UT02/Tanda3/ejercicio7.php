<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php

if (!isset($_POST['oportunidades'])) {
    $numeroIntroducido = 55555;
    $oportunidades = 3;
  } else {
    print_r($_POST);
    $oportunidades = $_POST['oportunidades'];
    $numeroIntroducido = $_POST['numeroIntroducido'];
  }

  $numeroSecreto = 1234;

  if ($numeroIntroducido == $numeroSecreto) {
    echo "La caja fuerte se ha abierto.";
    echo '<img src="https://m.gifmania.com/Gif-Animados-Objetos/Imagenes-Dinero/Cajas-Fuertes/Caja-Fuerte-Lingotes-Oro-81890.gif"  alt="">';
  } elseif ($oportunidades == 0) {
    echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
  } else {
    echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
    $oportunidades--;
    echo "Introduce un número de cuatro cifras.";
    echo '<form action="07.php" method="post">';
    echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
    echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
    echo '<input type="submit" value="Continuar">';
    echo '</form>';

    ?>
</body>
</html>