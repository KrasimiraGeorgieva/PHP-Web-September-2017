<?php
require_once 'common.php';
$userRepository = new \MyMoney\Repository\UserRepository($db);
$userService = new \MyMoney\Service\UserService($userRepository);
$userHandler = new \MyMoney\Http\UserHttpHandler($userService, $template, $dataBinder);
$userHandler->register($_POST);