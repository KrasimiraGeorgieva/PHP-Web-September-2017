<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/9/2017
 * Time: 22:25
 */

namespace TaskManagement\Repository;


use TaskManagement\Data\UserDTO;

interface UserRepositoryInterface
{
    public function findOne(int $id): UserDTO;

    public function findOneByUsername(string $username): ?UserDTO;

    public function insert(UserDTO $user): bool;
}