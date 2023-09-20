<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>205</title>
</head>
<body>
    <p>
        <?php
            $diners = $_GET["quantitat"];
            if ($diners === null) {
                echo "Posa la quantitat a la variable quantitat pel QueryString";
            } else {
                $billets = array(500, 200, 100, 50, 20, 10, 5);
                $monedas = array(2, 1);

                foreach ($billets as $a) {
                    $num = intdiv($diners, $a);
                    echo "<p>" . $num . " bitllet de " . $a . "</p>";
                    $diners -= $num*$a;
                }

                foreach ($monedas as $a) {
                    $num = intdiv($diners, $a);
                    echo "<p>" . $num . " moneda de " . $a . "</p>";
                    $diners -= $num*$a;
                }
            }
        ?>
    </p>
</body>
</html>