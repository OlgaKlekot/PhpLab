<?php
$repeat = function ($arr) {
    $newArr = [];
    for ($i = 0, $n = 0; $i < count($arr); $i++) {
        $newArr += array_fill($n, $arr[$i], $arr[$i]);
        $n += $arr[$i];
    };
    print_r($newArr);
};
$arr1 = [1, 3, 2, 4];
$repeat($arr1);
echo '<br />';




$uArr = function ($arr) {
    sort($arr);
    $nevArr = array_unique($arr);
    return $nevArr;
};
$t = [33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28];

$min = array_slice($uArr($t), 0, 3);

$max = array_slice($uArr($t), -3, 3);

$averageValue = round(array_sum($t)/count($t));
$lower = [];
$higher = [];
foreach ($uArr($t) as $value) {
    if ($value <= $averageValue) {
        $lower[strval($averageValue - $value)]= $value;
    } else {
        $higher[strval($value - $averageValue)] = $value;
    };
};
$averageArr = array_flip($lower) + array_flip($higher);
asort($averageArr);
$mid = array_slice(array_keys($averageArr), 0, 3);
sort($mid);
print_r($min);
echo '<br />';
print_r($max);
echo '<br />';
print_r($mid);
echo '<br />';





$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];

$booksSort = function ($books) {
    foreach ($books as $key => $row) {
        $price[$key]  = $row['price'];
    };
    array_multisort($price, SORT_ASC, $books);
    print_r($books);
};
$booksSort($books);
echo '<br />';

$tag = array_filter($books, function ($book) {
    if (is_array($book['tags']) && (in_array('php', $book['tags']))) {
        return true;
    }
    return false;
});
print_r($tag);
echo '<br />';




$equator = function ($arr) {
    foreach ($arr as $n => $val) {
        $left = array_slice($arr, 0, $n);
        $right = array_slice($arr, ($n + 1), (count($arr)-($n + 1)));
        if ((array_sum($left) == array_sum($right)) && ($n != 0) && ($n != (count($arr) - 1))) {
            return $n;
        };
    };
    return -1;
};
$a = [1,2,3,4,3,2,1];
$b = [1,100,50,-51,1,1];
$c = [20,10,-80,10,10,15,35];
$d = [10,-80,10,10,15,35];

echo $equator($a) . '<br />';
echo $equator($b) . '<br />';
echo $equator($c) . '<br />';
echo $equator($d) . '<br />';




$uniqVal = function ($arr) {
    $u = array_map('strval', $arr);
    echo array_search('1', array_count_values($u)) . '<br />';
};
$uniqVal([1, 1, 1, 2, 1, 1]);
$uniqVal([0, 0, 0.55, 0, 0]);
$uniqVal([3,1,5,3,7,4,1,5,7]);