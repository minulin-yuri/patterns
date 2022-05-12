<?php

namespace app;

trait TSingletone
{
    private static $instanсe = null;

    private function __construct()
    {
        //
    }
    private function __clone()
    {
        //
    }
    private function __wakeup()
    {
        //
    }

    public static function getInstance()
    {
        if (is_null(static::$instanсe)) {
            static::$instanсe = new static(); //использование static
        }
        return static::$instanсe;
    }
}
