<?php
function sum($n){
    if ($n >= 1 && $n <= 100) {
        $answer = $n * ($n+1) / 2; //https://mathwords.net/1karannowa 公式を引用
        echo $answer.'<br>';
    }else{
        echo 'Error<br>';
    }
}
sum(3); //6
sum(10); //55
sum(33); //561
sum(0); //Error
sum(101); //Error
?>
