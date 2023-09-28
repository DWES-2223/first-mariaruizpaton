<!DOCTYPE html>
<html>
<head>
    <title>Información de Productos</title>
</head>
<body>
<h1>Información de Productos</h1>

<?php
if (isset($_GET['quantitat'])) {
    $quantitat = intval($_GET['quantitat']);
    if ($quantitat> 0) {
        echo "<h2>Lista de productos:</h2>";

        for ($i = 1; $i <= $quantitat; $i++) {
            echo "<h3>Producto $i:</h3>";
            echo '<form method="post">';

            echo '<label>Nombre:</label>';
            echo '<input type="text" name="nom[]" required>';
            echo '<br>';

            echo '<label>Precio:</label>';
            echo '<input type="number" name="preu[]" step="0.01" required>';
            echo '<br>';

            echo '<br>';
        }

        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    } else {
        echo '<p>Dades incorrectes</p>';
    }
} else {
    echo '<p>Dades incorrectes</p>';
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nom']) && isset($_POST['preu'])) {
    $nombres = $_POST['nom'];
    $costos = $_POST['preu'];

    echo '<h2>Información de los productos ingresados:</h2>';
    for ($i = 0; $i < count($nombres); $i++) {
        echo "<p>Producto " . ($i + 1) . ": Nombre = " . $nombres[$i] . ", Costo = " . number_format($costos[$i], 2) . "€</p>";
    }
}*/
?>
</body>
</html>
