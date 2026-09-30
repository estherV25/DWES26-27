<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>Parametros variables</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="card">
        <h1>Parámetros variables</h1>
        <?php
        // recibe nº indeterminado y devolver el nº más alto (:int)
        function mayor(): int {
            $numeros = func_get_args(); // obtiene un array con todos los argumentos que hayas pasado a la función al llamarla

            // Si no se han pasado parámetros, puedes devolver 0 o manejar el caso
            if (empty($numeros)) {
                return 0;
            }

            // cogemos como referencia el primer nº como el mayor
            $nMayor = $numeros[0];
            // recorremos array para buscar el mas grande
            foreach($numeros as $num){
                if($num > $nMayor){
                    $nMayor = $num;
                }
            }
            return $nMayor;
        }
        echo "El numero mayor es " . mayor(3,2,6,1,19);
        ?>
    </div>
</body>
</html>