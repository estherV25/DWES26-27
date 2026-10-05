<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Correcto</title>
</head>
<body>
    <h1 style="color: green;">¡Bienvenido/a, <?= htmlspecialchars($usuarioRecibido ?? 'usuarios') ?>!</h1>
    <p>Has iniciado sesión correctamente en el sistema.</p>
</body>
</html>