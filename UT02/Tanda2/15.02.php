<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15.02.php</title></head>
<body>

    <?php
        $puntos = 0;

        foreach($_POST as $respuesta)
        {
            $puntos += $respuesta;
        }

        if($puntos <= 10)
        {
            echo "¡Enhorabuena! Tu pareja parece ser totalmente fiel.";
        }

        if(($puntos > 11) && ($puntos <= 22))
        {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente, ";
            echo " auqneus eguramente ser'a algo sin importancia. No bajes la guarcia.";
        }

        if($puntos > 22)
        {
            echo "Tu pareja tiene todos los ingredientes de estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
            echo "y averigües que es lo que está pasando por su cabeza.";
        }

    ?>
    <br>
    <a href="15.01.php">>>Volver</a>
</body>
</html>