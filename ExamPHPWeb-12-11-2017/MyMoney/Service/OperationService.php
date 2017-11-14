<?php


namespace MyMoney\Service;



use MyMoney\OperationDTO;

class OperationService implements OperationServiceInterface
{
    /**
     * @var OperationServiceInterface
     */
    private $operationRepository;


    public function __construct(OperationServiceInterface $operationRepository)
    {
        $this->operationRepository = $operationRepository;
    }


    public function add(OperationDTO $task): bool
    {
        // TODO: Implement add() method.
    }

    public function edit(OperationDTO $task, int $id): bool
    {
        // TODO: Implement edit() method.
    }

    public function remove(int $id): bool
    {
        // TODO: Implement remove() method.
    }

    public function view(int $id): OperationDTO
    {
        // TODO: Implement view() method.
    }


}