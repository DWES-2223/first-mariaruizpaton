<!DOCTYPE html>
<html lang="es">
<?php
    extract($_GET);
?>
<head>
<meta charset="UTF-8">
<title>223</title>
</head>
<body>
    <?php
        if (isset($nombre)) {
    ?>
    <table>
        <thead>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th>=</th>
            <th>a*b</th>
        </thead>
        <tbody>
            <?php
            for ($i=0; $i <=10 ; $i++) {
                $total = $nombre * $i;
                ?>
                <tr>
                    <?php
                    echo $nombre;
                    ?>
                </tr>
                <tr>
                    <?php
                    echo "*";
                    ?>
                </tr>
                <tr>
                    <?php
                    echo $i;
                    ?>
                </tr>
                <tr>
                    <?php
                    echo $total;
                    ?>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
        } else {
            ?>
            Posa el nombre pel QueryString
            <?php
        }
    ?>
</body>
</html>