<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>203</title>
</head>
<body>
    <p>
        <?php
            extract($_POST);
        ?>
    </p>
    <table>
        <tr>
            <td>Nom</td>
            <td><?=$nom?></td>
        </tr>
        <tr>
            <td>Cognoms</td>
            <td><?=$cognom1 . ' ' . $cognom2?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?=$any?></td>
        </tr>
        <tr>
            <td>Telèfon</td>
            <td><?=$telefon?></td>
        </tr>
    </table>
</body>
</html>