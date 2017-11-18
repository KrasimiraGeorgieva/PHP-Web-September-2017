<?php
spl_autoload_register();
require_once 'common.php';
$userRepository = new \MyMoney\Repository\UserRepository($db);
$userService = new \MyMoney\Service\UserService($userRepository);
$homeHttpHandler = new \MyMoney\Http\HomeHttpHandler($template,$dataBinder);
$homeHttpHandler->index();