<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/10/2017
 * Time: 00:00
 */

namespace TaskManagement\Service;


use TaskManagement\Repository\UserRepositoryInterface;
use TaskManagement\UserDTO;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function login(string $username, string $password):bool
    {
        // TODO: Implement login() method.
    }

    public function register(UserDTO $user, string $confirmPassword): bool
    {
        // TODO: Implement register() method.
    }
}