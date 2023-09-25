<!DOCTYPE html>
<html lang="es">
<?php
$array = [
    'Pons' => 183,
    'Sergi' => 180,
    'María' => 168,
    'Nuria' => 169,
    'Cintia' => 165];
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
<table>
    <th>
        Nom
    </th>
    <th>
        Alçada
    </th>
</table>

<tbody>
<thead>
<td>

</td>
</thead>
</tbody>
<?php
?>
</body>
</html>

