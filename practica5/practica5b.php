<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Euros a Otras Monedas</title>
</head>
<body>

<form method="post" action="">
    <label for="euros">Cantidad de euros:</label>
    <input type="text" id="euros" name="euros" required>
    
    <label for="moneda">Convertir a:</label>
    <select id="moneda" name="moneda">
        <option value="usd">Dólares USA (USD)</option>
        <option value="gbp">Libras esterlinas (GBP)</option>
        <option value="jpy">Yenes japoneses (JPY)</option>
        <option value="chf">Francos suizos (CHF)</option>
    </select>
    
    <input type="submit" value="Convertir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["euros"])) {
        echo "<p>Debe introducir una cantidad.</p>";
    } else {
        $euros = $_POST["euros"];
        $moneda = $_POST["moneda"];
        
        switch ($moneda) {
            case "usd":
                $tasa_conversion = 1.325;
                $resultado = $euros * $tasa_conversion;
                echo "<p>$euros euros son $resultado dólares.</p>";
                break;
            case "gbp":
                $tasa_conversion = 0.927;
                $resultado = $euros * $tasa_conversion;
                echo "<p>$euros euros son $resultado libras esterlinas.</p>";
                break;
            case "jpy":
                $tasa_conversion = 118.232;
                $resultado = $euros * $tasa_conversion;
                echo "<p>$euros euros son $resultado yenes japoneses.</p>";
                break;
            case "chf":
                $tasa_conversion = 1.515;
                $resultado = $euros * $tasa_conversion;
                echo "<p>$euros euros son $resultado francos suizos.</p>";
                break;
            default:
                echo "<p>Moneda seleccionada no válida.</p>";
                break;
        }
        
        echo '<p><a href="">Volver</a> </p>';
    }
}
?>

</body>
</html>
