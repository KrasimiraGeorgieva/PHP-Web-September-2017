<?php

namespace MyMoney\Service;

use MyMoney\OperationDTO;



interface OperationServiceInterface
{
    public function add(OperationDTO $task):bool;

    public function edit(OperationDTO $task, int $id):bool;

    public function remove(int $id ):bool;

    public function view(int $id):OperationDTO;


}