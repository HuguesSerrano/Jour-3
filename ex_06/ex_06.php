<?php

$var=function ($str) {
    $str = strtoupper($str);
    return("$str");
};

echo $var("test");