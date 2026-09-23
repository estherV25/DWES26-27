<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <h1>Lista de personas</h1>
        <?php
            $personas = [
                ['nombre' => 'Aitor', 'altura' => '182', 'email' => 'aitor@gmail.com'],
                ['nombre' => 'Manuel', 'altura' => '190', 'email' => 'manuel@gmail.com'],
                ['nombre' => 'PAula', 'altura' => '160', 'email' => 'paula@gmail.com'],
            ];
            
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Altura</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personas as $persona): ?>
                    <tr>
                        <td><?= $persona['nombre'] ?></td>
                        <td><?= $persona['altura'] ?></td>
                        <td><?= $persona['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>