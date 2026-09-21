<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="ejercicio5.css">

</head>
<body>
    <div class="card">
        <h1>Ejercicio 5</h1>
        <?php
            $nota1 = 7;
            $nota2 = 8;
            $nota3 = 5;

            if($nota1 > $nota2 && $nota1 > $nota3){
                echo "La nota más alta es: $nota1";
            }elseif ($nota2 > $nota1 && $nota2 > $nota3){
                echo "La nota más alta es: $nota2";
            } else{
                echo "La nota más alta es: $nota3";
            }
        ?>
        </div>
    </body>
</html>
