<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 </title>
    <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="card">
            <h1>Ejercicio 2</h1>
            <?php
            define('PI', 3.1416);
            $radio = 3.5;
            $areaTotal = 3.14 * PI * $radio;
            echo "<p class='resultado'> La longitud de la circunferencia es $areaTotal</p>";
            ?>
        </div>
    </body>


</html>