<?php

class Db
{
    private $connection = null;
    private $orm = null;

    public function __construct(AbstractORM $orm)
    {
        $this->orm = $orm;
    }

    public function getConnection()
    {
        $this->connection = $this->orm->DBConnection();
        return $this->connection;
    }

    private function query(string $sql, array $params = [])
    {
        if (!$this->connection) {
            throw new Exception('Отсутствует подключение к бд');
        }
        return $this->orm->DBQueryBuilder($sql, $params);
    }
}
