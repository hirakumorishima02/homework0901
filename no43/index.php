<?php

$i = 0;
// must
// 可読性のために関数の{}の間はスペースをあけることが多いです
function wark($a,$b) {
    if ($b % $a !== 0) {
        // info
        // https://www.php.net/manual/ja/function.echo.php
        // 複数の文字列をそれぞれ別の引数として渡しても、
        // すべて連結してひとつの引数として渡してもかまいません
        echo ceil($b / $a), PHP_EOL;
    // info
    // 比較の時は厳密に比較する===が好まれます
    } elseif ($b % $a === 0) {
        echo $b / $a , PHP_EOL;
    }
}

wark(10,31); //4
wark(1,7); //7
