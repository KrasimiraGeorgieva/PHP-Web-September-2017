<?php
$firsName = fgets(STDIN);
$lastName = fgets(STDIN);
$age = fgets(STDIN);

$fullName = $firsName . $lastName;
echo "My name is $fullName and I am $age years old.";
