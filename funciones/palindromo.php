<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Palindromo</title>
</head>
<body>
    <div class="card">
        <h1>Palindromo</h1>
        <?php 
        function esPali(string $txt) {
            // pasamos a minusculas
            $minusculas = mb_strtolower($txt);
            //eliminamos espacios en blanco
            $espacios = str_replace(' ', '', $minusculas);
            $invertida = '';
            $longitud = mb_strlen($espacios);
            //recorremos la frase al revés y la guardamos
            for ($i=$longitud -1 ; $i >=0 ; $i--) { 
                $invertida .= $espacios[$i];
            } 
            if ($espacios === $invertida){
                echo "true";
            } else {
                echo "false";
            }
        }
        $frase = "ojo rojo";
        echo "<p> Frase: ". $frase ."</p>";
        echo "<p> Es pali: ";
        esPali($frase);
        ?>
    </div>
</body>
</html>