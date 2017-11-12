<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/10/2017
 * Time: 00:03
 */

namespace TaskManagement\Service;


use TaskManagement\UserDTO;

interface UserServiceInterface
{
    public function login(string $username, string $password):bool;

    public function register(UserDTO $user, string $confirmPassword):bool;
}