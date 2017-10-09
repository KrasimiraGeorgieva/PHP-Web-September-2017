<?php
declare(strict_types = 1);
class Student extends Human{
    private $facultyNum;

    public function __construct($firstName, $lastName, $facultyNum){
    parent::__construct($firstName, $lastName);
        $this->setFacultyNum($facultyNum);
    }

    protected function setFacultyNum($facultyNum){
        if (strlen($facultyNum) < 5 || strlen($facultyNum) > 10){
            exit("Invalid faculty number!");
        }
        $this->facultyNum = $facultyNum;
    }
    public function __toString()
    {
        return parent::__toString()."Faculty number: ". $this->facultyNum ."\r\n";
    }
}