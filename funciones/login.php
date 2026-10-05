<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="card">
        <h1>Login</h1>
        <!-- Si venimos reorientados desde ko.php con un mensaje de error, lo mostramos -->
         <?php if (isset($mensajeError)): ?>
            <p style="color: red; font-weight: bold;">
                <?= $mensajeError ?>
            </p>
            <?php endif; ?>
        <!-- Formulario-->
        <form action="compruebaLogin.php" method="POST">
            <div>
                <label for="usuario">Usuario: </label><br>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <br>
            <div>
                <label for="contra">Contraseña: </label><br>
                <input type="text" id="contra" name="contra" required>
            </div>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>