<?php
function sum($n){
    if ($n >= 1 && $n <= 100) {
        $answer = $n * ($n+1) / 2; //https://mathwords.net/1karannowa 公式を引用
        // must
        // brは改行タグになるので、phpとして改行する場合はPHP_EOLですね
        echo $answer.'<br>';
    // インデントをあけると可読性があがります
    } else {
        // お見事！こういう意図しない値を考慮しておくのは大事です
        echo 'Error<br>';
    }
}
sum(3); //6
sum(10); //55
sum(33); //561
sum(0); //Error
sum(101); //Error
// info
// phpは、htmlの中に書いたりする場合出なければ、閉じタグは書かないのが一般的です
?>
