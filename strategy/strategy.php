<?php

interface IPaySystem
{
    public function pay(float $price, string $phone);
}

class QiwiPaySystem implements IPaySystem
{
    public function pay(float $price, string $phone)
    {
        echo "Оплата через Qiwi";
    }
}

class YandexPaySystem implements IPaySystem
{
    public function pay(float $price, string $phone)
    {
        echo "Оплата через Yandex";
    }
}

class WebMoneyPaySystem implements IPaySystem
{
    public function pay(float $price, string $phone)
    {
        echo "Оплата через WebMoney";
    }
}

class PaymentManager
{
    protected IPaySystem $paySystem;
    protected User $user;
    protected float $totalPrice;

    public function __construct(IPaySystem $paySystem, User $user, float $totalPrice = 0)
    {
        $this->paySystem = $paySystem;
        $this->user = $user;
        $this->totalPrice = $totalPrice;
    }

    public function getPayment()
    {
        $this->paySystem->pay($this->totalPrice, $this->user->getPhone());
    }
}

class User
{
    protected string $phone;

    public function getPhone()
    {
        return $this->phone;
    }
}

class Cart
{
    public function getTotalPrice()
    {
        //получение общей стоимости заказа
    }
}
