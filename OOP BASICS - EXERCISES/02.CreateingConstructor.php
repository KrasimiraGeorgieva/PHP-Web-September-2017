<?php
declare(strict_types = 1);
namespace CreateConstructor;

class Person{
    private $name;
    private $age;

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
$name = trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));

new Person($name, $age);
echo $name . " " . $age;