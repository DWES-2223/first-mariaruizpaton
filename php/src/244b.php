<!DOCTYPE html>
<html lang="en">
<?php
include_once('functions.php');
?>
<head>
    <title>Tiquet de Compra</title>
</head>
<body>
<h1>Tiquet de Compra</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<table><thead><tr><th>Producte</th><th>Preu €</th><th>Preu Pts.</th></tr></thead><tbody>';
    $total = 0;
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'nom') !== false) {
            echo '<tr><td>'.$value.'</td>';
        }
        if (strpos($key, 'preu') !== false && is_numeric($value)) {
            echo '<td>'.$value.'</td><td>'.euro2peseta($value).'</td></tr>';
            $total += $value;
        }
    }
    echo '<tr><td>Total</td><td>'.$total.'</td><td>'.euro2peseta($total).'</td></tr>';
    echo '</tbody></table>';
}
?>
<?php
include_once('245peu.html')
?>
</body>
</html>

