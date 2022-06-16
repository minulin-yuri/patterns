<?php

include 'getRandom.php';
include 'InterpolationSearch.php';

$arr = getSortRandArray();

$num = getRandNumber();

//print_r($arr);

echo 'Случайное число: ' . $num . PHP_EOL;

$key = interpolationSearch($arr, $num);

//удаляем элемент массива
if ($key !== null) {
    unset($arr[$key]);
    echo 'Удален элемент массива с ключом ' . $key . PHP_EOL;
    return;
}

$incKey = $key++;
$decKey = $key--;

//проверяем наличие повторений 
while ($arr[$incKey] === $num) {
    unset($arr[$incKey]);
    echo 'Удален элемент массива с ключом ' . $incKey . PHP_EOL;
    $incKey++;
}

while ($arr[$decKey] === $num) {
    unset($arr[$decKey]);
    echo 'Удален элемент массива с ключом ' . $decKey . PHP_EOL;
    $decKey--;
}

echo 'Число не найдено!';



