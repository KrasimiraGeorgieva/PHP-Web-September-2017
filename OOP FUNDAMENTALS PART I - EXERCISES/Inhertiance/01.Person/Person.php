<?php
declare(strict_types = 1);
namespace Ihertiance;
class Person
{
    private $name;
    private $age;
    public function __construct(string $name, int$age)
    {
        $this->setName($name);
        $this->setAge( $age);
    }
    public function getName()
    {
        return $this->name;
    }
    protected function setName($name)
    {
        if(strlen($name)>3){
            $this->name = $name;
        }else{
            throw new \Exception("Name's length shoul not be less than 3 symbols!");
        }
    }
    public function getAge()
    {
        return $this->age;
    }
    protected function setAge( int $age)
    {
        if($age>0){
            $this->age = $age;
        }else{
            throw new \Exception("Age must ne positive!");
        }
    }

}