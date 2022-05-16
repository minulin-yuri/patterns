<?php

abstract class AbstractDb
{
    protected $config = [
        //конфигурация для подключения к бд
        //конечно лучше вынести в отдельный файл
    ];

    public function getConfig()
    {
        return $this->config;
    }

    abstract public function DbResponse(): string;
}
