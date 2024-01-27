<?php
$arr = [15, 25, 5, 7, 9, 4, 8, 10, 15];


$oddNumbers = array_filter($arr, function($number) {
    return $number % 2 == 1;
});

asort($oddNumbers);

foreach ($arr as &$number) {
    if ($number % 2 == 1) {
        $number = array_shift($oddNumbers);
    }
}

echo implode(' ', $arr);
?>