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
        // ここは最小公倍数を使うと1回で判定できます
        // &&で繋ぐ場合、式が1回ずつ、合計2回評価されます
        case $i % 15 == 0: // 3と5の最小公倍数 = 15
            echo 'FizzBuzz'.PHP_EOL;
            break;
        case $i % 3 != 0 && $i % 5 != 0:
            echo $i . PHP_EOL;
            break;
        //　インデントは可読性のために合わせるのがgoodです
        default:
            echo '整数のみを入力してください。';
        // swtichで書くときは想定外の変更に備えて
        // defaultも設けておくのがベターです
        }
    }
}

// fizzBuzzfor
function fizzBuzzfor($n){
    // rangeを使うよりこっちの方がgoodですね
    // rangeの場合、nの値によっては一度大きな配列を作ることになるためメモリを無駄に使うことになります
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
    // gotoはあまり使うことがないので大丈夫です！
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
