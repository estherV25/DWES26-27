<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Analizador WC</title>
</head>
<body>
    <div class="card">
        <h1>Analizador WC</h1>
        <?php
            function analizarTextoWC(string $frase) {
                $totalPalabras = str_word_count($frase); // cuenta las palabras de una cadena de txt
                $totalLetras = strlen(str_replace(' ', '', $frase)); // obtiene la cantidad de letras reemplazando los espacios por no espacios,así las cuenta
                
                // str_word_count con el parámetro 1 devuelve un array con las palabras
                $palabras = str_word_count($frase, 1);
                echo "<p> <strong>Texto: ".$frase . "</strong></p>";
                echo "Letras totales: $totalLetras <br>";
                echo "Cantidad de palabras: $totalPalabras <br><br>";

                foreach ($palabras as $palabra) {
                echo "Palabra: ".$palabra." -> Tamaño: " . strlen($palabra) . "<br>";
                }
            }

            $fraseTxt = "hola que tal como estas";
            analizarTextoWC($fraseTxt);        
        ?>
        
    </div>
</body>
</html>