<?php

function my_swap(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo $a;
    echo $b;
};

$test1 = 10;
$test2 = 20;
my_swap($test1, $test2);