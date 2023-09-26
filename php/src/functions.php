<?php
function esParell(int $a) : bool {
    return $a%2 == 0;
}

function arrayAleatori(int $tam, int $min, int $max) : array {
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $num = random_int($min, $max);
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
    $a = (string)$num;
    $nums = strlen($a);
    return $nums;
}

function digitsN(int $num, int $post) : int {
    $a = (string)$num;

    if ($post > 0 && $post < strlen($a)){
        return (int)$a[$post];
    } else {
        return  -1;
    }
}