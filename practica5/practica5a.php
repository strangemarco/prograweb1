<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Euros a Pesetas</title>
</head>
<body>

<form method="post" action="">
    <label for="euros">Cantidad de euros :</label>
    <input type="text" id="euros" name="euros">
    <input type="submit" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["euros"])) {
        echo "<p>Por favor, introduzca una cantidad.</p>";
    } else {
        $euros = $_POST["euros"];
        $tasa_conversion = 166.386;
        $pesetas = $euros * $tasa_conversion;
        echo "<p>$euros euros son $pesetas pesetas.</p>";

        echo '<p><a href="">Volver</a> </p>';
    }
}
?>

</body>
</html>
