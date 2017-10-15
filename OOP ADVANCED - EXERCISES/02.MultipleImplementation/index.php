<?php
declare(strict_types = 1);
namespace MultipleImplementation;

require_once 'IPerson.php';
require_once 'IIdentifiable.php';
require_once 'IBirthable.php';
require_once 'Citizen.php';

$peter = new Citizen('Peter', 25 ,770612678,'12.06.1977');
echo $peter;