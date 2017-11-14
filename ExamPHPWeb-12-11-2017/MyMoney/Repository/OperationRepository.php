<?php


namespace MyMoney\Repository;




use Database\DatabaseInterface;
use MyMoney\OperationDTO;
use MyMoney\Repository\OperationRepositoryInterface;

class OperationRepository implements OperationRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function viewAll(OperationDTO $operations): \Generator
    {
        $query = "";

        return $this->db->query($query)
            ->execute()
            ->fetch(OperationDTO::class);
    }
}