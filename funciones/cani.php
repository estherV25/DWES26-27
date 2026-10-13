<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cani</title>
</head>
<body>
    <div class="card">
        <h1>Cani</h1>
        <?php 
        function cani(string $txt): string {
            $restultado = "";
            $longitud = mb_strlen($txt); // mb_strlen por si hay textos o tildes
            for ($i=0; $i < $longitud; $i++) { 
                $letra = mb_substr($txt, $i, 1); 
                if ($i % 2 == 0) {
                    $restultado .= mb_strtolower($letra);
                }else{
                    $restultado .= mb_strtoupper($letra);
                }
            }
            return $restultado;
        }
        $frase = "Hola que tal";
        echo "<p> Frase: ". $frase ."</p>";
        echo "<p> Cani: " .cani($frase)."</p>";
        ?>
    </div>
</body>
</html>