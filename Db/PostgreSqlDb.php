<?php

class PostgreSqlDb extends AbstractDb
{
    protected $config = [
        //конфигурация для подключения к бд
        //конечно лучше вынести в отдельный файл
    ];

    public function DbResponse(): string
    {
        echo 'Подключение к PostgreSQL';
    }
}
