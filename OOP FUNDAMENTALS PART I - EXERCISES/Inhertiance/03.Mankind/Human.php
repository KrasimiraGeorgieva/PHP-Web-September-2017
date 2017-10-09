<?php
declare(strict_types = 1);
class Human{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function getFirstName(){
        return $this->firstName;
    }

    protected function setFirstName($firstName){
        if ($firstName[0] != strtoupper($firstName[0])) {
            throw new Exception("Expected upper case letter!Argument: " . $firstName);
        }if(strlen($firstName) < 4){
            exit("Expected length at least 4 symbols!Argument: " . $firstName);
        }
        $this->firstName=$firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        if ($lastName[0] != strtoupper($lastName[0])) {
            exit("Expected upper case letter!Argument: " . $lastName);
        }if(strlen($lastName) < 4){
            exit("Expected length at least 3 symbols!Argument: " . $lastName);
        }
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return 'First Name: '.$this->firstName."\r\n".'Last Name: '.$this->lastName."\r\n";
    }
}