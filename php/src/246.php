<!DOCTYPE html>
<html lang="es">
<?php
$usuarios = include_once('246password.php');
?>
<head>
    <meta charset="UTF-8">
    <title>243</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuari'];
    $contra = $_POST['contrasenya'];
    if (array_key_exists($usuario, $usuarios)) {
        if ($usuarios[$usuario] === $contra) {
            echo "L'usuari introduït és correcte.";
        } else {
            echo "La contrasenya és incorrecta.";
        }
    } else {
        echo "L'usuari no existeix.";
    }
}
?>
</body>
</html>
