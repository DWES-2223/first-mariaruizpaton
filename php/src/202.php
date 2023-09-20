<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>202</title>
</head>
<body>
    <p>
        <?php
            $nombre = "Maria";
            $apellido = "Ruiz";
            $apellido2 = "Patón";
            $email = "mrp990305@gmail.com";
            $anyNacimiento = 1999;
            $telefono = 634901615;
        ?>
    </p>
    <table>
        <tr>
            <td>Nom</td>
            <td><?=$nombre?></td>
        </tr>
        <tr>
            <td>Cognoms</td>
            <td><?=$apellido . ' ' . $apellido2?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?=$anyNacimiento?></td>
        </tr>
        <tr>
            <td>Telèfon</td>
            <td><?=$telefono?></td>
        </tr>
    </table>
</body>
</html>

