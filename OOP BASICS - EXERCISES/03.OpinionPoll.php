<?php
declare(strict_types = 1);
namespace OpinionPool;
class Person
{
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

$number = intval(trim(fgets(STDIN)));
$persons = [];
for ($i = 0; $i < $number; $i++){
    $input = explode(' ', trim(fgets(STDIN)));
    $persons [] = new Person($input[0],intval($input[1]));
}

$filteredPersons = array_filter($persons, function (Person $person) {
    return $person->getAge() > 30;
});
usort($filteredPersons, function (Person $person1, Person $person2) {
    return $person1->getName() <=> $person2->getName();
});
foreach ($filteredPersons as $person) {
    echo $person->getName(). ' - ' . $person->getAge() . "\r\n";
}