<?php
function vell($array): int {
    $a = 0;
    for ($i = 0; $i < count($array); $i++) {
        $cont = $array[0];
        if (fecha_inglesa($cont) > fecha_inglesa($array[$i])){
            $a = $i;
        }
    }
    return $a;
}

function fecha_inglesa($date) : string{
    $parts = explode('.', $date);
    return $parts[2] . '/' . $parts[1] . '/' . $parts[0];
}

function laureado($array) {
    $contador = array_count_values($array);
    return array_search(max($contador), $contador);
}

function any($date) : string {
    $parts = explode('.', $date);
    return $parts[2];
}

function jove($array, $array2) {
    $edades = [];
    for ($i = 0; $i < count($array); $i++) {
        $edad = any($array2[$i]) - $array[$i];
        $edades[] = $edad;
    }

    $minEdad = min($edades);
    $indice = array_search($minEdad, $edades);

    return [$indice, $minEdad];
}
function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}