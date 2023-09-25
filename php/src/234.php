<!DOCTYPE html>
<html lang="es">
<?php
$array = [
    'Pons' => 183,
    'Sergi' => 180,
    'María' => 168,
    'Nuria' => 169,
    'Cintia' => 165];
?>
<head>
    <meta charset="UTF-8">
    <title>231</title>
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
    </tr>
    </thead>
    <tbody>
        <?php
        foreach ($array as $nom => $altura){ ?>
            <tr>
                <td> <?= $nom ?></td>
                <td><?= $altura ?> </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>

