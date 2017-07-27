<?php
$str = 'var_test_text';
$stR = preg_replace('/_\w/', 'T', $str);
echo $stR . '<br />';



$str2 = 'ФЫВА олдж';
$s1 = substr($str2, 0, 8);
$s2 = substr($str2, -8, 8);
$rev = function ($s) {
    preg_match_all('/./u', $s, $ar);
    return join('', array_reverse($ar[0]));
};
$s1_2 = $rev($s1);
$s2_2 = $rev($s2);
echo $str2 . '<br />';
echo $s1_2 . ' ' . $s2_2 . '<br />';



$a = [342, 55, 33, 123, 66, 63, 9];
$a_3 = preg_grep('/\d*3\d*/', $a);
foreach ($a_3 as $_3) {
    echo $_3 . ', ';
};
echo '<br />';



$a_3count = preg_match_all('/3/', join('', $a));
echo $a_3count;