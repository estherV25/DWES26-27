<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Analizador</title>
</head>
<body>
    <div class="card">
        <h1>Analizador</h1>
        <?php 
        function analizarTexto (string $frase) {
            $frase = trim($frase);
            if(empty($frase)) return;
            // convertimos en array la cadena mediante un separador
            $palabras = explode(" ",$frase);
            $totalPalabras = count($palabras);
            $totalLetras = strlen(str_replace(' ','', $frase)); // obtiene la cantidad de letras reemplazando los espacios por no espacios,así las cuenta
            echo "<p> <strong>Texto: ".$frase . "</strong></p>";
            echo "<p> Total palabra: ".$totalPalabras . "</p>";
            echo "<p> Total letras: ".$totalLetras . "</p>";
            foreach ($palabras as $palabra) {
                echo "Palabra: ".$palabra." -> Tamaño: " . strlen($palabra) . "<br>";
            }
        }

        $fraseTxt = "hola que tal cómo estás";
        analizarTexto($fraseTxt);
        ?>
        
    </div>
</body>
</html>