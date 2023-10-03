<!DOCTYPE html>
<html lang="es">
<?php
$records = include_once ('atletes.php');
include_once ('functions.php');
$marca = array_column_ext($records, 'data', -1);
?>
<head>
    <meta charset="UTF-8">
    <title>270a</title>
</head>
<body>
<p> Record més antic: <?php echo vell($marca) ?></p>
<p> Club amb més títols: <?php laureado(array_column_ext($records, 'club', -1)) ?></p>
<p> Persona amb més records: <?php laureado(array_column_ext($records, 'atleta', -1)) ?></p>
<p> Ciutat més propicia: <?php laureado(array_column_ext($records, 'lloc', -1)) ?></p>
<?php $jove = jove(array_column_ext($records, 'natalici', -1), array_column_ext($records, 'data', -1)) ?>
<p> L'atleta més jove en coseguir el record: <?php array_column_ext($records, 'atleta', -1)[$jove[0]]?> - <?php echo $jove[1]?></p>
<?php
include('270a.php');
?>
</body>
</html>