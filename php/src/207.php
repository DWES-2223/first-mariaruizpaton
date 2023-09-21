<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>206</title>
</head>
<body>
    <p>
        <?php
            if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['numero3'])) {
                $numero1 = intval($_GET['numero1']);
                $numero2 = intval($_GET['numero2']);
                $numero3 = intval($_GET['numero3']);

                $major = $numero1;

                if ($numero2 > $major) {
                    $major = $numero2;
                }

                if ($numero3 > $major) {
                    $major = $numero3;
                }

                //$major = ($numero1 > $numero2) ? ($numero1 > $numero3 ? $numero1 : $numero3) : ($numero2 > $numero3 ? $numero2 : $numero3);

                echo "El nombre més gran entre $numero1, $numero2 i $numero3 és el $major";
            } else {
                echo "Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString";
            }
        ?>
    </p>
</body>
</html>