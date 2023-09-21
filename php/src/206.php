<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>206</title>
</head>
<body>
    <p>
        <?php
            $num = $_GET["numero"];
            if ($num === null) {
                echo "Posa el numero a comprobar a la variable numero del QueryString";
            } else {
                if ($num >= 1) {
                     echo "<p> El número " . $num . " és positiu </p>";
                } elseif ($num == 0) {
                    echo "<p> El número " . $num . " és zero </p>";
                } else {
                    echo "<p> El número " . $num . " és negatiu </p>";
                }
            }

            
        ?>
    </p>
</body>
</html>