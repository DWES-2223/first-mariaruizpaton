<!DOCTYPE html>
<html lang="es">
<?php
$array = [];
for ($i = 0; $i <= 33; $i++) {
    $num = rand(0, 100);
    array_push($array, $num);
}

$suma = array_sum($array);
$media = $suma / count($array);
?>
<head>
    <meta charset="UTF-8">
    <title>231</title>
</head>
<body>
<ul>
    <?php
    echo '<li>' . max($array) . '</li>';
    echo '<li>' . min($array) . '</li>';
    echo '<li>' . $media . '</li>';
    ?>
</ul>
</body>
</html>

