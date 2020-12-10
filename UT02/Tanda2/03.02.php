<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03.02.php</title>
</head>
<body>
    <?php
    $dia = $_POST ['dia'];

    switch($dia)
    {
        case 1:
            $dia = "lunes";
        break;
        case 2:
            $dia = "martes";
        break;
        case 3:
            $dia = "miércoles";
        break;
        case 4:
            $dia = "jueves";
        break;
        case 5:
            $dia = "viernes";
        break;
        case 6:
            $dia = "sábado";
        break;
        case 7:
            $dia = "domingo";
        break;
        default:
        $dia = "Debe introducir un número del 1 al 7.";
    }
    echo $dia;

    ?>
    <br><br>
    <a href="03.01.php">>>Volver</a>
</body>
</html>