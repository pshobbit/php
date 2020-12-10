<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08.02.php</title>
</head>
<body>
    <?php
        $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3']) / 3;
        echo "La nota media es: ", round($media, $precision = 2), " y en el boletín tiene un ";

        if($media < 5)
        {
            echo "insuciciente.";
        }
        if(($media >= 5) && ($media < 6))
        {
            echo "suficiente.";
        }
        if(($media >= 6) && ($media < 7))
        {
            echo "bien.";
        }
        if(($media >= 7) && ($media < 9) )
        {
            echo "notable.";
        }
        if(($media >= 9) && ($media <= 10))
        {
            echo "sobresaliente.";
        }

    ?>
    <br>
    <a href="08.01.php">>> Volver</a>
    
</body>
</html>