<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="ejercicio4.css">
</head>
<body>
    <div class="card">
    <h1>Ejercicio 4</h1>
        <?php
            $nota1 = 7;
            $nota2 = 8;

            if($nota1 > $nota2){
                echo "La nota más alta es: $nota1";
            }else{
                echo "La nota más alta es: $nota2";
            }
        ?>
    </div>
</body>
</html>
