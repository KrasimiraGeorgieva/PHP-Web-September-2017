<?php


namespace MyMoney\Service;



use MyMoney\UserDTO;

interface UserServiceInterface
{
    public function login(string $username, string $password):bool;

    public function register(UserDTO $user, string $confirmPassword):bool;
}