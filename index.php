<?php
header("Content-Type: text/plain; charset=utf-8");

include 'Tree.php';
include 'Term.php';

// задаем исходное математическое выражение
$str = "(x+42)^2+7*y-z";
$params = [
    'x' => 5,
    'y' => 3,
    'z' => 2
];

$parse = new Tree();
$parse->setParams($params);

// строительство дерева классов
$parse->builder($str);

echo "Текущее выражение: \n";
echo $str . " = " . $parse->calc($params) . "\n";
echo "при значании параметров:\n";
echo $parse->viewParams();
