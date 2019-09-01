<?php

// fizzBuzzforeach
function fizzBuzzforeach($n)
{
    foreach (range(1, $n) as $i) {
        switch ($i) {
        case $i % 3 == 0:
            echo 'Fizz'.PHP_EOL;
            break;
        case $i % 5 == 0:
            echo 'Buzz'.PHP_EOL;
            break;
        case $i % 3 == 0 && $i % 5 == 0:
            echo 'FizzBuzz'.PHP_EOL;
            break;
        case $i % 3 != 0 && $i % 5 != 0:
            echo $i . PHP_EOL;
            break;
    }
    }
}

// fizzBuzzfor
function fizzBuzzfor($n){
    for ($i=1; $i<=$n; ++$i) {
        switch ($i) {
            case $i % 3 == 0:
                echo 'Fizz'.PHP_EOL;
                break;
            case $i % 5 == 0:
                echo 'Buzz'.PHP_EOL;
                break;
            case $i % 3 == 0 && $i % 5 == 0:
                echo 'FizzBuzz'.PHP_EOL;
                break;
            case $i % 3 != 0 && $i % 5 != 0:
                echo $i . PHP_EOL;
                break;
        }
    }
}
// fizzBuzzgoto
function fizzBuzzgoto($n){ // goto文は使いこなせませんでした…。
    $i = 0;
    num:
    $i++;
    echo $i.PHP_EOL;
    fiz:
    $i++;
    echo 'Fizz'.PHP_EOL;
    buz:
    $i++;
    echo 'Buzz'.PHP_EOL;
    fizbuz:
    $i++;
    echo 'FizzBuzz'.PHP_EOL;

    if($i < $n) goto num;
    if($i % 3 == 0) goto fiz;
    if($i % 5 == 0) goto buz;
    if($i % 3 == 0 && $i % 5 == 0) goto fizbuz;
}

fizzBuzzforeach(3);
fizzBuzzfor(3);
fizzBuzzgoto(3);