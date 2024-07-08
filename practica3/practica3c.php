<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión euros/pesetas</title>
    <style>
        table {
       
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #FFEECC;
        }
        tr:nth-child(even) {
            background-color: #CCCCCC;
        }
        tr:nth-child(odd) {
            background-color: #CCEEFF;
        }
    </style>
</head>
<body>
    <h1 >Conversión euros/pesetas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Euros (€)</th>
                <th>Pesetas (pts)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $equivalencia = 166.386;
            for ($i = 1; $i <= 10; $i++) {
                $pesetas = $i * $equivalencia;
                echo "<tr>";
                echo "<td>$i €</td>";
                echo "<td>$pesetas pts</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
