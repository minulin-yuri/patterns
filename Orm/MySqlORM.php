<?php

class MySqlQRM extends AbstractORM
{
    public function DBConnection()
    {
        //подключение к бд
    }

    public function DBRecord(string $tablename)
    {
        //запись таблицы бд
    }

    public function DBQueryBuilder(string $sql, array $params = []): string
    {
        //формирование строки запроса к бд
    }
}
