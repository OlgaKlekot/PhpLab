<?php
//1.1

$x = '206.190.36.45';
print_r(gethostbyaddr($x));
echo '<br />';

//1.2
$d = 'dotcom.com';
echo checkdnsrr($d) ? $d . ' - valid' : $d . ' - not valid';

//1.3

//header("HTTP/1.1 301 Moved Permanently");
//header("Location: http://google.com");
//exit();

echo '<br />';




//2
$place = file_get_contents('https://www.epam.com/about');
$n = preg_match_all('/<svg\s/', $place);
print_r($n);
echo '<br />';




//3
$arr = [1, 5, 7, 4, 8, 9, 6, 5, 3, 4, 2];
function mySort($arr, $index, $length = null) {
    if (($length == null)) {
        $length = count($arr);
    };
    $subArr = array_slice($arr, $index, $length, true);
    asort($subArr);
    array_splice($arr, $index, $length, $subArr);
    return $arr;
}
print_r(mySort($arr, 3));
echo '<br />';
print_r(mySort($arr, 3,5));
echo '<br />';




//4
$arr = [1, -2, 3, 4, -5, -4, 3, 2, 1];
$arrKeys = [[1, 3], [0, 4], [6, 8], [2, 3]];
function sum($arr, $arrK) {
    $offset = $arrK[0];
    $length = $arrK[1] - $arrK[0] + 1;
    return array_sum(array_slice($arr, $offset, $length));
};
foreach ($arrKeys as $arrK) {
    $values[] = sum($arr, $arrK);
};
arsort($values);
print_r($arrKeys[key($values)]);
echo '<br />';




//5
function smile ($arr) {
    return count(preg_grep('/[:;][-~]?[)D]/', $arr));
};
$arr1 = [':)', ';(', ';}', ':-D'];
$arr2 = [';D', ':-(', ':-)', ';~)'];
$arr3 = [';]', ':[', ';*', ':$', ';-D'];
echo smile($arr1) . ', ' . smile($arr2) . ', ' . smile($arr3) . '<br />';




//6
$str = 'raersrrrersassswwaaadfdfeeefgtthtgffdd';
$arr = str_split($str);
foreach ($arr as $value) {
    $pos = array_keys(array_intersect($arr, array($value)));
    $distance[$value] = ($pos[count($pos) - 1] - $pos[0] + 1);
};
arsort($distance);
print_r(key($distance) . $distance[key($distance)]);