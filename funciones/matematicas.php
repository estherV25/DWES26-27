<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">    
    <title>Matematicas</title>
</head>
<body>
    <div class="card">
        <h1>Matematicas</h1>
        <?php
        //devuelve la cantidad de dígitos de un numero
        function digitos(int $num): int{ //devuelve la cantidad de dígitos de un numero
            $cantidadN = 0;
            if($num == 0){
                return 1;
            }
            while ($num > 0){
                $num = (int)($num / 10); // quitamos los decimales
                $cantidadN++; // sumamos al contador
            }
            return $cantidadN;
        }
        
        //devuelve el digito que ocupa, empezando por la izq, la posición $pos
        function digitoN(int $num, int $pos): int{
            $digito = (string) abs($num); // lo pasamos a str, y lo convertimos a postivo
            return (int) $digito[$pos -1]; // busca la posicíon

        }

        // le quita por detrás (derecha) $cant dígitos
        // la funcion substr() permite indicar una longitud negativa o recorta la lngitud deseada
        function quitarPorDetras(int $num, int $cant){
            $numerosStr = (string) abs($num); // pasamos a str
            $recortado = substr($numerosStr,0,-$cant);
            return (int)$recortado;
        }

        //le quita por delante (izq) $cant dígitos
        function quitaPorDelante(int $num, int $cant) {
            $numerosStr = (string) abs($num); // pasamos a str
            $recortado = substr($numerosStr,$cant); // corta desde la posicion $cant hasta el final
            return (int)$recortado;
        } 

        $numero = 4356;
        $posicion = 2;
        $cantidad = 2;
        echo "<h2>Numero original: $numero</h2>";
        echo "<p> <strong>Digitos totales: </strong>" .digitos($numero) ."</p>";
        digitos(100);
        echo"<p> <strong>Digito que ocupa en la posición 2: </strong>".digitoN($numero, $posicion)."</p>";
        echo "<p><strong>Cantidad de digitos sin borrar(d): </strong>" .quitarPorDetras($numero,$cantidad)."</p>";
        echo "<p><strong>Cantidad de digitos sin borrar(i): </strong>" .quitaPorDelante($numero,$cantidad)."</p>";

        ?>
    </div>
</body>
</html>