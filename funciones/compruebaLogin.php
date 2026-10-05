<!--Recibe por POST lo que el usuario escribió y lo valida con un array asociativo 
con usuarios y contraseñas permitidos-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>compruebaLogin</title>
</head>

<body>
    <div class="card">
        <?php
            // Definimos lista simulada de usuarios validos (array asociativo: usuario)
            $usuariosValidos = [
                "admin" => "1234",
                "pepe" => "1234",
                "maria" => "1234"
            ];

            // Recogemos los datos enviados desde el form (o cadenas vacías si no existen)
            $usuarioRecibido = $_POST['usuario'] ?? '';
            $contraRecibida = $_POST['contra'] ?? '';
            //hacemos comprobaciones

            $existeUsuario = array_key_exists($usuarioRecibido, $usuariosValidos);
            // si existe el usuario
            if ($existeUsuario) {
                //si existe, comprobamos contraseña
                if ($usuariosValidos[$usuarioRecibido] === $contraRecibida) {
                    // usuario y contraseña CORRECTOS -> cargamos la vista de éxito
                    include('ok.php');
                } else {
                    // usuario existe pero contraseña INCORRECTA
                    $mensajeError = "La contraseña introducida es incorrecta";
                    include('ko.php');
                }
            } else {
                // si el usuario no existe
                $mensajeError = "El usuario y la contraseña son incorrectos";
                include('ko.php');
            }
        ?>
    </div>
</body>

</html>