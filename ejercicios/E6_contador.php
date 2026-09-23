<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <h1>Ejercicio 6</h1>
        <h2>Números del 0 a 100: </h2>
        <?php 
            for ($i=1; $i < 101; $i++) { 
                if($i < 100){
                    echo "$i, ";    
                }else{
                    echo $i;    
                }
            }

        ?>
        <h2>Cuenta atrás:</h2>
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
    </div>
</body>
</html>


