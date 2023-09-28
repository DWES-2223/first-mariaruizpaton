<?php
function esParell(int $a) : bool {
    return $a%2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $num = rand($min, $max);
        array_push($array, $num);
    }
    return $array;
}

function countParells(array  &$array) : int {
    $cont = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i]%2 == 0){
            $cont++;
        }
    }
    return $cont;
}

function major() : int {
    $param = func_get_args();
    $max = 0;

    for ($i = 0; $i < count($param); $i++) {
        if ($param[$i] > $max){
            $max = $param[$i];
        }
    }
    return $max;
}

function concatenar(... $paraules) : string {
    return implode(' ', $paraules);
}

function digits(int $num) : int {
    return strlen((string)$num);
}

function digitsN(int $num, int $post) : int {
    $nums = (string)$num;
    return (int)$nums[$post];
}

function llevaDarrere(int $num, int $cant) : int {
    $a = (string)$num;
    if ($cant > strlen($a)){
        return 0;
    }
    return (int) substr($a, 0, strlen($a) - $cant);
}

function llevaDavant(int $num, int $cant) : int {
    $a = (string)$num;
    if ($cant > strlen($a)){
        return 0;
    }
    return (int) substr($a, $cant, strlen($a) - $cant);
}

function peseta2euros ($cantidad, $cotizacio = 0.006) {
    return $cantidad * $cotizacio;
}

function euro2peseta ($cantidad, $cotizacio = 166.386) {
    return $cantidad * $cotizacio;
}

