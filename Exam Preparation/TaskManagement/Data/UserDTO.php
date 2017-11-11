<?php
/**
 * Created by PhpStorm.
 * User: Krasimira
 * Date: 11/9/2017
 * Time: 23:27
 */

namespace TaskManagement;


class UserDTO
{
    private $id;
    private $username;
    private $password;
    private $firstName;
    private $lastName;

    public static function create (string $username, string $password, string $firstName,
                                   string $lastName, int $id = null):UserDTO
    {
        return (new UserDTO())
            ->setUsername($username)
            ->setPassword($password)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setId($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id):UserDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username):UserDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password):UserDTO
    {
        $this->password = $password;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName):UserDTO
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName):UserDTO
    {
        $this->lastName = $lastName;
        return $this;
    }
}