<?php

namespace MyMoney\Repository;


use MyMoney\OperationDTO;

interface OperationRepositoryInterface
{
    public function viewAll (OperationDTO $operations):\Generator;

}