<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01.02.php</title>
</head>
<body>
    <?php
    $dia = $_POST['dia'];

    switch($dia)
    {
        case lunes:
            echo "El Lunes toca DWEC";
        break;
        case martes:
            echo "El martes toca EIE";
        break;
        case miercoles:
            echo "El miércoles toca DWES";
        break;
        case jueves:
            echo "El jueves toca DAW";
        break;
        case viernes:
            echo "El viernes toca DIW";
        break;

        default:
        echo "El día introducido no es correcto.";
    }
    ?>
    <br><br>
    <a href="01.01.php">>> Volver</a>
    
</body>
</html>