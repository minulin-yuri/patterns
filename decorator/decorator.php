<?php

interface Notification
{
    public function send(string $message);
}

class SmsNotification implements Notification
{
    public function send($message)
    {
        //отправка sms оповещения
    }
}

class EmailNotification implements Notification
{
    public function send($message)
    {
        //отправка email оповещения
    }
}

class ChromeNotification implements Notification
{
    public function send($message)
    {
        //отправка chrome оповещения
    }
}

//реализация оповещений
function Notify(string $message)
{
    $notification =
        new ChromeNotification(
            new EmailNotification(
                new SmsNotification()
            )
        );
    $notification->send($message);
}
