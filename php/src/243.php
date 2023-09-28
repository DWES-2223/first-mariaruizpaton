<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>231</title>
</head>
<body>
<h1>Conversor de Pesetas y Euros</h1>

<form method="post">
    <label>Cantidad:</label>
    <input type="text" name="cantidad" required>
    <br>

    <label>De:</label>
    <select name="origen" required>
        <option value="pesetas">Pesetas</option>
        <option value="euros">Euros</option>
    </select>
    <br>

    <label>A:</label>
    <select name="destino" required>
        <option value="pesetas">Pesetas</option>
        <option value="euros">Euros</option>
    </select>
    <br>
    <input type="submit" value="Convertir">
</form>
<?php
include_once('functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = floatval($_POST["cantidad"]);
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];

    if ($origen == "pesetas" && $destino == "euros") {
        $resultado = peseta2euros($cantidad);
        echo "$cantidad pesetas equivalen a $resultado euros.";
    } elseif ($origen == "euros" && $destino == "pesetas") {
        $resultado = euro2peseta($cantidad);
        echo "$cantidad euros equivalen a $resultado pesetas.";
    } else {
        echo "Por favor, selecciona las unidades de origen y destino adecuadas.";
    }
}
?>
</body>
</html>
