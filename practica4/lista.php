<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manejo de Cadenas</title>
</head>
<body>
    <?php
    $texto = "uno-dos-tres-cuatro-cinco";
    $palabras = explode("-", $texto);
    ?>
    <h2>Manejo de Cadenas</h2>
    <h2>Ejemplo 2</h2>
    <ul>
        <?php
        foreach ($palabras as $palabra) {
            echo "<li>$palabra</li>";
        }
        ?>
    </ul>

</body>
</html>