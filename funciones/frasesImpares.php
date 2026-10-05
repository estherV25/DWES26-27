<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Frases Impares</title>
</head>
<body>
    <div class="card">
        <h1>Frases impares</h1>
        <?php 
        function frasesImpares(string $frase): string {
            $resultado = "";
            $longitud = strlen($frase); // obtiene la longitud de la cadena y devuelve un nº entero
            for ($i=1; $i < $longitud; $i+=2) { 
                $resultado .= $frase[$i]; // añade las letras de las posiciones impares
            }
            return $resultado;
        }
        $fraseImpar = "Hola que tal";
        echo "<p> Frase: ". $fraseImpar . "</p>";
        echo "<p> Letras en posición impar: ". frasesImpares($fraseImpar)."</p>";

        ?>
    </div>
    
</body>
</html>