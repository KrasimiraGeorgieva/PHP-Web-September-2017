<?php
declare(strict_types = 1);
namespace Inhertiance;

use Ihertiance\Person;

class Child extends Person
{
    protected function setAge( int $age)
    {
        if ($age >= 15) {
            throw new \Exception("Child's age must be less than 15!");
        } else {
            parent::setAge($age);
        }
    }
}