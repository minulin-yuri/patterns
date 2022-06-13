<?php

class Number
{
    private int $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    private function isPrimeNumber(int $n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if (($n % $i) === 0) {
                return false;
            }
            return true;
        }
    }

    public function getDeviders()
    {
        $deviders = [];

        for ($i = 2; $i < sqrt($this->value); $i++) {
            if (($this->value % $i) === 0) {
                $deviders[] = $i;
            }
        }

        return $deviders;
    }

    public function getPrimeDeviders()
    {
        $primeDeviders = [];

        foreach ($this->getDeviders() as $dev) {
            if ($this->isPrimeNumber($dev)) {
                $primeDeviders[] = $dev;
            }
        }

        return $primeDeviders;
    }

    public function getMaxPrimeDevider()
    {
        return end($this->getPrimeDeviders());
    }
}



$num = new Number(600851475143);
var_dump($num->getPrimeDeviders());
echo 'Самый большой простой делитель числа ' . $num->getValue() . ' = ' . $num->getMaxPrimeDevider();
