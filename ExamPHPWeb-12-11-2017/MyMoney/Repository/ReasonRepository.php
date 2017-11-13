<?php

namespace MyMoney\Repository;



use Database\DatabaseInterface;

class ReasonRepository implements ReasonRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }
}