<?php

$s = rand(0,456);
$f = rand(1,123);

echo '階段' . $s . '段目<br>';
echo '家の階段の高さ' . $f . '<br>';
echo ' = 家の階段の高さ' . floor($s / $f + 1) . '段分<br>';