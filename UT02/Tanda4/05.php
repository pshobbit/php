<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5.PHP</title>
</head>
<body>
    <?php
        if (!isset($_GET['temperatura']))
        {
            // Pide los datos de las temperaturas
            $mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    ?>
        Por favor, introduzca la temperatura media de cada mes: <br><br>
        <form action="05.php" method="get">
    <?php
            echo "<table>";
            for ($i = 0; $i < 12; $i++) 
            {
                echo "<tr><td>$mes[$i]</td><td> <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br></td></tr>";
            }
            echo "</table><br>";
    ?>
            <input type="submit" value="OK">
        </form>
    <?php
        } else {
            // Pinta el diagrama de barras
            $temperatura = $_GET['temperatura'];
            echo "<table>";

            foreach($temperatura as $mes => $temperaturaMes) 
            {
                echo "<tr><td>$mes </td><td>";
                // Pinta la barra
                for ($i = 0; $i < $temperaturaMes; $i++) 
                {
                    echo "<img src=\"bggreen.png\">";
                }
                echo " $temperaturaMes"."ºC<br></td></tr>";
            }
            echo "</table>";
    ?>
            <br>
            <a href="05.php">>> Volver</a>
    <?php
        }
    ?>
    
</body>
</html>
