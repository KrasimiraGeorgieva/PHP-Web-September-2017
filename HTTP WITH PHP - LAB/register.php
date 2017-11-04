<?php

var_dump($_GET);
var_dump($_POST);

// за да извадя username от POST-масива и да ги запиша във файл пиша следното:

$username = $_POST['username'];
$password = $_POST['password'];

// Имената на променливите трябва да съвпадат с name="username"
// name="password" във формата от файл $_POST_form.php

file_put_contents("users.txt", "username: " . $username. " ||| password: " . $password);