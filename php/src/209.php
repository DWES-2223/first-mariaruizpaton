<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>206</title>
</head>
<body>
    <p>
        <?php
            if (isset($hora, $minuts,$segon)) {
                $segon++;
                if($minuts >= 60){
                    $segon = 0;
                    $minuts++;
                    if($minuts >= 60){
                        $minuts = 0;
                        $hora++;
                        if($hora >= 24){
                            $hora = 0;
                        }
                    }
                }
                printf("%d:%d:%d", $hora, $minuts, $segon);
            }
            
            
        ?>
    </p>
</body>
</html>