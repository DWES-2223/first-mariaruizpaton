<!DOCTYPE html>
<html>
<head>
    <title>Tiquet de Compra</title>
</head>
<body>
<h1>Tiquet de Compra</h1>

<?php
include_once('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nombres = $_POST['nom'];
    $costos = $_POST['preu'];

    if (!empty($nombres) && !empty($costos)) {
        echo '<table border="1">';
        echo '<tr><th>Producte</th><th>Preu (Euros)</th><th>Preu (Pesetes)</th></tr>';

        $totalEuros = 0;
        $totalPesetas = 0;

        for ($i = 0; $i < count($nombres); $i++) {
            $nombre = $nombres[$i];
            $costo = $costos[$i];
            $preuEuros = number_format($costo, 2);
            $preuPesetas = number_format(euro2peseta($costo), 2);
            echo "<tr><td>$nombre</td><td>$preuEuros €</td><td>$preuPesetas ₧</td></tr>";

            $totalEuros += $costo;
            $totalPesetas += euro2peseta($costo);
        }

        echo '</table>';

        echo '<p>Total en Euros: ' . number_format($totalEuros, 2) . ' €</p>';
        echo '<p>Total en Pesetas: ' . number_format($totalPesetas, 2) . ' ₧</p>';
    } else {
        echo '<p>Dades incorrectes</p>';
    }
} else {
    echo '<p>Dades incorrectes</p>';
}
?>
</body>
</html>

