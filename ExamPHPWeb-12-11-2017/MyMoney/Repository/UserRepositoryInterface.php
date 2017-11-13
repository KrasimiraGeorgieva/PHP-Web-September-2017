<?php


namespace MyMoney\Repository;


use MyMoney\UserDTO;

interface UserRepositoryInterface
{
    public function insert(UserDTO $userDTO):bool;

    public function findOneByUsername(string $username): ?UserDTO;

    public function findOne(int $id): UserDTO;
}