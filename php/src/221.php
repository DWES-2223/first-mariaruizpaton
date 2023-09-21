<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>221</title>
</head>
<body>
     <?php
        $suma = 0;
        for ($i=1; $i < 11; $i++) { 
            $suma += $i;
            echo $i;
            echo ($i == 10)?'=':'+';
        }
        echo $suma;
    ?>
</body>
</html>