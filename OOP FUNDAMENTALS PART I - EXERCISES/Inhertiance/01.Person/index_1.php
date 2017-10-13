<?php
namespace Inhertiance;
require_once 'Person.php';
require_once 'Child.php';

$children=[];
$children[] = new Child('Pesho', 12);
$children[] = new Child('Martin', 10);
$children[] = new Child('Gencho', 11);
$children[] = new Child('Ivan', 6);
foreach ($children as $child){
    echo $child->getName()." -> ".$child->getAge()."\n";
}