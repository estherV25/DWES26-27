<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>intercambia</title>
</head>
<body>
    <div class="card">
        <?php
            function intercambia(&$a, &$b){
                $temporal = $a; // guardamos el valor d a
                $a = $b;
                $b = $temporal;
            }
            // creamos variables reales
            $a = 5;
            $b = 10;
            echo "<h2>Valores antes de la función</h2>";
            echo "a = $a <br>";
            echo "b = $b <br>";

            // pasamos variables a la función
            intercambia($a, $b);           
            echo "<h2>Valores después del intercambio: </h2>";
            echo "a = $a <br>";
            echo "b = $b <br>";
        ?>
        
    </div>
    
</body>
</html>