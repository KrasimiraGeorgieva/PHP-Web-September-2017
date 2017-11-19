<?php

namespace TaskManagement\Service;


use TaskManagement\Data\UserDTO;

interface UserServiceInterface
{
    public function getCurrentUser(): UserDTO;

    public function login(string $username, string $password): bool;

    public function register(UserDTO $user, string $confirmPassword): bool;
}