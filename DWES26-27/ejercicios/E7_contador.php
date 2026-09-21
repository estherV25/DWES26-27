<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <h1>Ejercicio 7</h1>
        <h2>Este contador va del 0 al 100:</h2>
        <p>
            <?php 
                for ($i=0; $i < 101; $i++) { 
                    if($i < 100){
                        echo "$i,";    
                    }else{
                        echo $i;    
                    }
                }
            ?>
        </p>

        <h2>Este contador va del 10 al 0:</h2>
        <p>
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
        </p>
    </div>
</body>
</html>

