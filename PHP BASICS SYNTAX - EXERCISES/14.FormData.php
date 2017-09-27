<?php
if (isset($_GET) &&
    !empty($_GET) &&
    sizeof($_GET) === 3
) {
    $name = trim($_GET['name']);
    $age = intval(trim($_GET['age']));
    $gender = trim($_GET['gender']);
    $result = "My name is {$name}. I am {$age} years old. I am {$gender}.";
}
include '14.GetFormData.php'
?>

