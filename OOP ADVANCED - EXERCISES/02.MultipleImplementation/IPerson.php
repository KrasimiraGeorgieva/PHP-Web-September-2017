<?php
declare(strict_types = 1);
namespace MultipleImplementation;
interface Person{
    public function setName(string $name);
    public function setAge(int $age);
}