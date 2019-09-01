<?php

$i = 0;
function wark($a,$b){
    if($b % $a != 0){
        echo ceil($b / $a) . PHP_EOL;
    }elseif($b % $a == 0){
        echo $b / $a . PHP_EOL;
    }
}

wark(10,31); //4
wark(1,7); //7
