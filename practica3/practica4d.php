<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
</head>
<body>
    <h1>Página de bienvenida</h1>
    <?php
    date_default_timezone_set('America/Caracas'); // Asegúrate de establecer la zona horaria correcta
    $hora = date('H'); // Obtiene la hora actual en formato 24 horas
    $nombre = "Ing Gustavo Tantani Mamani"; // Puedes cambiar este nombre o recibirlo desde un formulario

    if ($hora >= 8 && $hora < 13) {
        $mensaje = 'Buenos días';
    } elseif ($hora >= 14 && $hora <= 20) {
        $mensaje = 'Buenas tardes';
    } else {
        $mensaje = 'Buenas noches';
    }

    echo "<p>$mensaje, $nombre</p>";
    ?>
</body>
</html>
