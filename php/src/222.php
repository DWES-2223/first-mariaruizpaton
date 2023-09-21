<!DOCTYPE html>
<html lang="es">
<head>
<?php
    extract($_GET);
?>
<meta charset="UTF-8">
<title>222</title>
</head>
<body>
    <?php
        if (isset($base) && isset($exponent)) {
            $potencia = 1;
            for ($i=0; $i < $exponent; $i++) { 
                $potencia *= $base;
            }
            echo $base . '^' . $exponent . ' = ' . $potencia;
        } else {
            echo "Posa la base i l'exponent a les variables base i exponent pel QueryString";
        }
    ?>
</body>
</html>