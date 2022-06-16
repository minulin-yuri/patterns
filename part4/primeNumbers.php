<?php

const COUNT = 10000;

function isPrime($num) {
    for ($i = 2; $i <= sqrt($num); $i++) 
    {
        if (($num % $i) === 0) {
            return null;
        }
    }
    return true;
}

$primeNumbers = [];

$i = 2;
while (count($primeNumbers) <= COUNT)
{
    if (isPrime($i)) {
        $primeNumbers[] = $i;
    }
    $i++;
}

//print_r($primeNumbers);
echo '10001-м простым числом является ' . $primeNumbers[COUNT] . PHP_EOL;