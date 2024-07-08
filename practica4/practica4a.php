<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manejo de cadenas</title>
</head>
<body>
    <h1>Manejo de cadenas</h1>
    <h2>Ejemplo 1</h2>
    <?php
    include 'cadena.php';

    $fichero = "curriculum.pdf";
    $extension = calcula_extension($fichero);
    $tipo = tipo_fichero($extension);

    echo "<p>El fichero '$fichero' es de tipo '$tipo'.</p>";
    ?>
</body>
</html>