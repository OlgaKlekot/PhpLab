<?php
$text1 = 'Hello';
$text2 = 'World';
echo $text1 . ' ' . $text2. '<br />';

$var = 'hello';
echo $var[0] . ' ' . $var[1] . ' ' . $var[strlen($var)-1] . '<br />';

$b = function ($a) {
    if ($a > 0 && $a < 5) {
        echo 'Вірно' . '<br />';
    } else {
        echo 'Не вірно' . '<br />';
    }
};
$b(-5);
$b(0);
$b(-3);
$b(2);

$m = function ($min) {
    if ($min >= 0 && $min <= 59) {
        if ($min < 15) {
            echo 'перша';
        } elseif ($min < 30) {
            echo 'друга';
        } elseif ($min < 45) {
            echo 'третя';
        } elseif ($min >= 45) {
            echo 'четверта';
        }
    } else {
        echo 'неправильні дані';
    };
};
$m(43);
echo '<br />';

$date = function ($year) {
    echo (($year % 4 == 0 && $year % 100 !== 0) || $year % 400 == 0) ? $year . 'р. - високосний рік' : $year . 'р. - невисокосний рік';
};
$date(2020);
echo '<br />';


$comparison = function ($num) {
    $num = (str_split($num));
    $leftSum = 0;
    for ($i = 0; $i < 3; $i++) {
        $leftSum += $num[$i];
    };
    $rightSum = 0;
    for ($i = 3; $i < 6; $i++) {
        $rightSum += $num[$i];
    };
    echo $leftSum == $rightSum ? 'так' : 'ні';
};
$comparison('385934');