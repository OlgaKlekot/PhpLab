<?php
$bandName = function ($band) {
    if ($band[0] == $band[strlen($band) - 1]) {
        $newBand = ucfirst(substr($band, 0, -1) . $band);
    } else {
        $newBand = 'The ' . ucfirst($band);
    };
    echo $newBand . '<br />';
};
$bandName('dolphin');
$bandName('alaska');
$bandName('europe');
echo '<br />';



$replace = function ($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'A') {
            $str[$i] = 'T';
        } elseif ($str[$i] == 'T') {
            $str[$i] = 'A';
        } elseif ($str[$i] == 'C') {
            $str[$i] = 'G';
        } elseif ($str[$i] == 'G') {
            $str[$i] = 'C';
        }
    }
    return $str;
};
$str1 = 'ATTGC';
$str1_2 = $replace($str1);
$str2 = 'GTAT';
$str2_2 = $replace($str2);
echo $str1 . ' ' . $str2 . '<br />';
echo $str1_2 . ' ' . $str2_2 . '<br />';