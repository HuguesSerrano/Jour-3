<?php

function get_angry_dog($nbr) {
    $var = "";
    for (;$nbr>0;$nbr=$nbr-1){
        $var = $var. "woof";
    };
    return ($var. "\n");
};

//echo get_angry_dog(3);