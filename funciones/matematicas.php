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
            

        }

        // le quita por detrás (derecha) $cant dígitos
        function quitarPorDetras(int $num, int $cant){

        }

        //le quita por delante (izq) $cant dígitos
        function quitaPorDelante(int $num, int $cant) {

        } 

        $numero = 4356;
        echo "<h2>Numero original: $numero</h2>";
        echo "<p> Digitos totales: " .digitos($numero) ."</p>";
        digitos(100);
        ?>
    </div>
</body>
</html>