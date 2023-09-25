<!DOCTYPE html>
<html lang="es">
<?php
$array = [];
for ($i = 0; $i <= 100; $i++) {
    $nom = rand(0, 1)?'M':'F';
    array_push($array, $nom);
}
?>
<head>
    <meta charset="UTF-8">
    <title>231</title>
</head>
<body>
    <?php
    $nuevo = array_count_values($array);
    foreach ($nuevo as $item => $a){
        echo '<p>' . $item . ': ' . $a . '</p>';
    }
    ?>
</body>
</html>

