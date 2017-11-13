<?php


namespace MyMoney;


class UserDTO
{
    private $id;
    private $username;
    private $password;
    private $fullName;
    private $bornOn;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id):UserDTO
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username):UserDTO
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password):UserDTO
    {
        $this->password = $password;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName):UserDTO
    {
        $this->fullName = $fullName;
    }

    public function getBornOn()
    {
        return $this->bornOn;
    }

    public function setBornOn($bornOn):UserDTO
    {
        $this->bornOn = $bornOn;
    }
}