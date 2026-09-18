<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <p>Números del 0 a 100: </p>
    <?php 
        for ($i=1; $i < 101; $i++) { 
            if($i < 100){
                echo "$i, ";    
            }else{
                echo $i;    
            }
        }

    ?>
    <p>Cuenta atrás:</p>
    <?php

        $numero = 10;
        while ($numero >= 0) {
            echo $numero;
                // Imprime el guión solo si NO es el último número (0)
            if ($numero > 0) {
                echo "-";
            }
            $numero--; // Restamos 1 en cada vuelta
        }
    ?>
</body>
</html>


