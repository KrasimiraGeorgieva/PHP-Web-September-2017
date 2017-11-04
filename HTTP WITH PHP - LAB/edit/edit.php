<?php
// EDIT

// Да приемем, че масива  $users ни е базата данни и искаме да променим данните за определен потребител

$users = [
    1 => [
    'username' => 'pesho',
    'password' => '123'
    ],
    2 => [
    'username' => 'gosho',
    'password' => '321'
    ]
];
// За да направим редакцията, трябва първо да вземем id-то, което ще дойде от $_GET и второ да извлечем потребителя

$id = $_GET['id'];
$user = $users[$id];

// Ако в $_POST стои ['username'] т.е. е изпратен, редактирай го, ако не - остават старите данни, които са $user ['username'].

$user['username'] =
    isset($_POST['username'])
    ? $_POST['username']
    : $user ['username'];

$user['password'] =
    isset($_POST['password'])
        ? $_POST['password']
        : $user ['password'];

// Накрая записваме потребителя със съответното id.

$users[$id] = $user;

var_dump($users);

// Някои от полетата може да отсъства, когато искаме например потребителя да може да променя само паролата. Тогава премахваме от формата Username: <input type="text" name="username" /><br>. Във формата оставаме само полетата, които искаме да променя потребителя.

filter_var();