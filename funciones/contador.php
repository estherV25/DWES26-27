<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contador</title>
</head>
<body>
    <div class="card">
        <h1>Ejercicio 1</h1>
        <?php
            function cuenta($a, $b){
                for ($i = $a; $i <= $b; $i++) { 
                    if($i < $b){
                        echo "$i , "; 
                    }else{
                        echo "$i";
                    }
                    
                }
            }
            // llamamos a la función
            cuenta(10,20);
        ?>
    </div>
</body>
</html>