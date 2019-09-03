<?php

date_default_timezone_set('UTC');

$start = '2015-1-1';
$end = '2015-12-31';

// こういう日付の比較の仕方は私も知りませんでした！
// 私も勉強になりました
// info
// strtotimeは2038年問題があるのであたまの片隅にいれておいてください
for ($i = $start; $i <= $end; $i = date('Y-m-d', strtotime($i . '+1 day'))) {
    list($y, $m, $d) = explode('-', $i);
    // もし1桁の日付であれば
    // imo
    // 比較の際も、半角スペースあけるとよみやすいです
    if (mb_strlen($d) === 1) {
        // ask
        // 条件と内容が逆ですかね？
        // もし日付と月が異なれば
        if ($m == $d) {
            echo $i . PHP_EOL;
        }
    // もし2桁の日付であれば
    } elseif (mb_strlen($d) === 2) {
        // もし2桁の日付であれば
        if ($m == substr($d, 0, 1) + substr($d, 1, 1)) {
            echo $i . PHP_EOL;
        }
    }
}
