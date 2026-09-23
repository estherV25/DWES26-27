<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="card">
            <h1>Ejercicio 4</h1>
            <?php
            $estudios_es = "La ESO, Grado Medio SMR y Grado Superior DAW";
            $estudios_val = "ESO, Grau Mitjà SMR y Grau Superior DAW";
            $idiomas_es = "Español, Valenciano, Inglés, Italiano";
            $idiomas_ing = "Spanish, Valencian, English, Italian";
            ?>

            <div class="section">
                <h2>Estudios / Estudis</h2>
                <p><strong>Español:</strong> <?php echo $estudios_es; ?></p>
                <p><strong>Valencià:</strong> <?php echo $estudios_val; ?></p>
            </div>

            <div class="section">
                <h2>Idiomas / Languages</h2>
                <p><strong>Español:</strong> <?php echo $idiomas_es; ?></p>
                <p><strong>English:</strong> <?php echo $idiomas_ing; ?></p>
            </div>
        </div>
    </body>


</html>