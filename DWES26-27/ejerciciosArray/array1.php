<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1</title>
</head>
<body>
    <?php
    $numeros = [];
    //Generar 50 nº aleatorios sin repetir 
    for ($i=0; $i < 50 ; $i++) { 
        $numeros[] = rand(0,99);
    }

    //ordenar de menor a mayor
    sort($numeros);

    //calculos
    $maximo = max($numeros);
    $minimo = min($numeros);
    $media = array_sum($numeros) / count($numeros);
    ?>

    <h2>Lista de 50 numeros:" </h2>
    <ul>
        <?php foreach ($numeros as $num): ?>
            <li><?= $num ?></li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <h2>Estadísticas</h2>
    <p>Nº mayor: <?= $maximo?></p>
    <p>Nº menor: <?= $minimo?></p>
    <p>Media: <?=  $media?></p>
</body>
</html>