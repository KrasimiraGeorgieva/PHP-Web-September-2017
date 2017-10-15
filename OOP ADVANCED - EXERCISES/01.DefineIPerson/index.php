<?php
declare(strict_types = 1);
namespace DefineIPerson;

require_once 'IPerson.php';
require_once 'Citizen.php';

$peter = new Citizen('Peter', 25);
echo $peter;