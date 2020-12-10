<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.01.php</title>
</head>
<body>
    <p>Este programa te dirá cuál es tu signo zodiacal a partir de tu fecha de nacimiento.</p><br>

    <form action="10.02.php" method="post">
        Introduzca el número del mes en que nació (1-12): <br>
        <input type="number" min="1" max="12" name="mes" autofocus><br>
        Introduzca el día del mes en el que nacistes (1-31): <br>
        <input type="number" min="1" max="31" name="dia"><br>
        <input type="submit" value="Aceptar">

    </form>

</body>
</html>