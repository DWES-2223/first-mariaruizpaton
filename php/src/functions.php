<?php
function vell($array) {
    $fechaMasAntigua = null;
    $keyFechaMasAntigua = null;

    foreach ($array as $key => $fecha) {
        $fechaUnix = fecha_inglesa($fecha);
        if ($fechaMasAntigua === null || $fechaUnix < $fechaMasAntigua) {
            $fechaMasAntigua = $fechaUnix;
            $keyFechaMasAntigua = $key;
        }

    }
    return $keyFechaMasAntigua;
}

function fecha_inglesa( string $date) : string {
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
    $indice = [];
    $edadMax = PHP_INT_MAX;
    $nataliciKeys = array_keys($array);
    $datakeys = array_keys($array2);
    for ($i = 0; $i < count($array); $i++) {
        $natalicikey = $nataliciKeys[$i];
        $datakey = $datakeys[$i];

        $anyNatalici = intval($array[$natalicikey]);
        $edad = (any($array2[$datakey])) - $anyNatalici;

        if ($edad < $edadMax){
            $indice = $natalicikey;
            $edadMax = $edad;
        }
    }

    return [$indice, $edadMax];
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