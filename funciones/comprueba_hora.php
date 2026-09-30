<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">    
    <title>Comprueba la hora</title>
</head>
<body>
    <div class="card">
        <h1>Comprueba la hora</h1>
        <?php
        function validarHora(string $horaTxt): void{
            // separamos el texto por el caracter ":"
            $partes = explode(":", $horaTxt);

            //comprobamos que contenga exactamente 3 partes
            if(count($partes) !== 3){
                echo "<p>La cadena'<strong>$horaTxt</strong>' no tiene el formato adecuado</p>";
                return;
            }

            //extraemos horas, minutos y segundos
            $hora = (int)$partes[0];
            $min = (int)$partes[1];
            $seg = (int)$partes[2];

            // validamos q los datso corresponden
            $esHora = ($hora >= 0 && $hora <= 23);
            $esMin = ($min >= 0 && $min <= 59);
            $esSeg = ($seg >= 0 && $seg <= 49);
            
            // mostramos el resultado
            echo "Horas: $hora| Minutos: $min | Segundos: $seg";
            if($esHora && $esMin && $esSeg){
                echo "<p style='color: green;'><strong> La hora es valida</strong></p>";
            }else{
                echo "<p style='color: red;'><strong> La hora NO es valida</strong></p>";

            }   
        }
        validarHora("21:30:12");
        validarHora("31:33:30");
        ?>
    </div>
</body>
</html>