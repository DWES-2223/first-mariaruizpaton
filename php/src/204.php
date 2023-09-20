<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>204</title>
</head>
<body>
    <p>
        <?php
            $edat = $_GET["edat"];
            if ($edat === null) {
                echo "Posa la teu edat actual a la variable edat pel QueryString";
            } else {
                $anyActual = date("Y");
                $anyJubilacion = (67 - $edat) + $anyActual;

                echo "<p>" . $edat - 10 . "</p>";
                echo "<p>" . $edat + 10 . "</p>";
                echo $anyJubilacion;
            }
        ?>
    </p>
</body>
</html>