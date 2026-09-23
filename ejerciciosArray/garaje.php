<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garaje</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <?php
        $coches =[
            '1234JJJ' => ['Seat', 'Ibiza', 3],
            '4567EEE' => ['Ford', 'Focus', 5],
            '9876WWW' => ['Renault', 'Clio', 2],
        ];
        // ordenar el array asociativo por sus claves(matrículas)
        ksort($coches);
        ?>
        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Puertas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coches as $matricula => $datos): ?>
                    <tr>
                        <td><strong><?= $matricula ?></strong></td>
                        <td><?= $datos[0] ?></td>
                        <td><?= $datos[1] ?></td>
                        <td><?= $datos[2] ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>