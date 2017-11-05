<?php

namespace Database;


class PDOResultSet implements ResultSetInterface
{
    /**
     * @var \PDOStatement
     */
    private $pdoStatement;

    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }

    public function fetch($className): \Generator
    {
        while($row = $this->pdoStatement->fetchObject($className)){
            yield $row; //yield-връща всени път, когато функцията се извика по един следващ елемент в while-цикъла
        }
    }
}