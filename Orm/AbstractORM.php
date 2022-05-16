<?php

abstract class AbstractORM
{
    protected $db = null;

    public function __construct(AbstractDb $db)
    {
        $this->db = $db;
    }

    abstract public function DBConnection();
    abstract public function DBRecord(string $tablename);
    abstract public function DBQueryBuilder(string $sql, array $params): string;
}
