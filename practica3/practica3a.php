<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión euros/pesetas</title>
</head>
<body>
    <h1>Conversión euros/pesetas</h1>
    <?php
    $equivalencia = 166.386;
    for ($i = 1; $i <= 10; $i++) {
        $pesetas = $i * $equivalencia;
        echo "$i € = $pesetas pts<br>";
    }
    ?>
</body>
</html>