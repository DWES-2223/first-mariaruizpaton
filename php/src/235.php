<!DOCTYPE html>
<html lang="es">
<?php
$array = [
    ['nom' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'],
    ['nom' => 'Maria', 'altura' => 168, 'email' => 'maria@correo.com'],
    ['nom' => 'Paula', 'altura' => 157, 'email' => 'paula@correo.com'],
    ['nom' => 'Julia', 'altura' => 165, 'email' => 'julia@correo.com'],
    ['nom' => 'Helena', 'altura' => 160, 'email' => 'helena@correo.com']];
?>
<head>
    <meta charset="UTF-8">
    <title>235</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>
            Nom
        </th>
        <th>
            Alçada
        </th>
        <th>
            Email
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($array as $item){
        echo '<tr>' .
                '<td>' . $item['nom'] .'</td>' .
                '<td>' . $item['altura'] .'</td>' .
                '<td>' . $item['email'] .'</td>' .
            '</tr>';
    }
    ?>
    </tbody>
</table>
</body>
</html>

