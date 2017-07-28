<?php
$eq = function ($str1, $str2) {
    $strCount = function ($str) {
        $sum = 0;
        if (($str == null) || !ctype_alpha($str)) {
            $sum = 0;
        } else {
            $str = str_split(strtoupper($str));
            for ($i = 0; $i < count($str); $i++) {
                $str_x = ord($str[$i]);
                $sum += $str_x;
            };
        };
        return $sum;
    };
    if ($strCount($str1) == $strCount($str2)) {
        echo 'equal';
    } else {
        echo 'not equal';
    };
};

$eq('AD', 'DD');
echo '<br />';
$eq('gf', 'FG');
echo '<br />';
$eq('zz1', '');
echo '<br />';
$eq('ZzZz', 'ffPFF');
echo '<br />';
$eq('kl', 'lz');
echo '<br />';
$eq(null, ' ');