<?php
declare(strict_types = 1);
namespace DefineClassPerson;

class Person
{
    public $name;
    public $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
$persons = new Person('Pesho', 20);
echo(count(get_object_vars($persons)));