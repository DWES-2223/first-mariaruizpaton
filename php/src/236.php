<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>237</title>
</head>
<body>
<?php
if (isset($quantitat) && $quantitat > 0){ ?>
<h2> Formularis per a <?= $quantitat ?> persones </h2>
<form method="post" action="">
    <?php
    for($i = 1; $i <= $quantitat; $i++) { ?>
        <label for="nom"
    <?php
    }
    ?>
</form>
<?php
}
?>
</body>
</html>
