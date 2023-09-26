<?php
include_once('functions.php');

echo esParell(4)?'Si':'No';
echo '<br>';
print_r(arrayAleatori(5, 8, 22));
echo '<br>';
$a = array(1, 3, 5, 7, 3, 4 ,6, 6,5,8,9);
echo countParells($a);