<!DOCTYPE html>
<html lang="es">
<?php
$array = [];
for ($i = 0; $i <= 50; $i++) {
    $num = rand(0, 99);
    array_push($array, $num);
}
?>
<head>
    <meta charset="UTF-8">
    <title>223</title>
</head>
<body>
<ul>
    <?php
    foreach ($array as $item){
        echo ' <li>' . $item . '</li> ';
    }
    ?>
</ul>
</body>
</html>
