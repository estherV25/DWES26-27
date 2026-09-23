<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimensional</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="card">
        <h1>Array Bidimensional 6x9</h1>
        <?php
        $filas = 6;
        $columnas = 9;

        //generar 54 nº aleatorios sin repetir y lo añadimos al array 
        $numerosUnicos = [];
        while(count($numerosUnicos) < ($filas * $columnas)){
            $numeros = rand(100,999);
            if(!in_array($numeros, $numerosUnicos)){ // si $numeros y no está en $numerosUnicos
                $numerosUnicos[] = $numeros;
            }
        }

        // rellenar la matriz bidireccional
        $matriz = [];
        $nMax = -1;
        $nMin = 1000;
        $columna_maximo = -1; // guardamos la posición del valor max y min para pintar sus colores en CSS
        $fila_minimo = -1;
        $index = 0; // puntero para sacar los nº de $numerosUnicos
        for ($i=0; $i < $filas; $i++) { 
            for ($j=0; $j < $columnas; $j++) { 
                $valor = $numerosUnicos[$index++];
                $matriz[$i][$j] = $valor;

                //buscamos posición del valor max
                if($valor > $nMax){
                    $nMax = $valor;
                    $columna_maximo = $j;
                }

                //buscamos posición del valor min
                if($valor < $nMin){
                    $nMin = $valor;
                    $fila_minimo = $i;
                }
            }
        }
        ?>

        <table>
            <tbody>
                <?php for ($i=0; $i < $filas; $i++): ?> 
                    <tr>
                        <?php for ($j=0; $j < $columnas; $j++): ?> 
                            <?php
                            $clase = '';
                            if($i == $fila_minimo){
                                $clase = 'texto-verde';
                            }
                            if ($j === $columna_maximo) {
                                    // Si coincide fila del mínimo y columna del máximo, destaca ambas
                                    $clase .= ' texto-azul';
                                }
                            ?>
                            <td class="<?=  trim($clase) ?>">
                                <?=  $matriz[$i][$j]; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <div class="leyenda">
                <p><span class="cuadro azul"></span> Columna del máximo (<strong><?= $nMax ?></strong> en col. <?= $columna_maximo + 1 ?>)</p>
                <p><span class="cuadro verde"></span> Fila del mínimo (<strong><?= $nMin ?></strong> en fila <?= $fila_minimo + 1 ?>)</p>
        </div>
    </div>
</body>
</html>