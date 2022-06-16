<?php

include '../part2/getRandom.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

$num = getRandNumber();

$arr = getSortRandArray();

//print_r($arr);

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, $num).PHP_EOL;

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, $num).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, $num);
