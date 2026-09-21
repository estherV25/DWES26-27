<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asociativo </title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="card">
        <?php
        $cant = [];
        $elementos = ['M', 'F'];

        //Rellenar array de 100 con valores aleatorios (M o F)
        for ($i = 0; $i < 100; $i++) {
            $cant[] = $elementos[rand(0, 1)];
        }

        $cont1 = 0;
        $cont2 = 0;

        foreach ($cant as $valor) {
            if ($valor === 'M') {
                $cont1++;
            } else {
                $cont2++;
            }
        }
        ?>

        <h2>Elementos totales</h2>
        <p>Hay <?= $cont1 ?> <strong>M</strong> totales</p>
        <p>Hay <?= $cont2 ?> <strong>F</strong> totales</p>
    </div>
</body>

</html>