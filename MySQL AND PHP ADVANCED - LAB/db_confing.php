<?php
$db_host = "localhost";
$db_name = "php-course";
$db_user = "root";
$db_password = "";

$db = new PDO("mysql:host=localhost;dbname=php-course;charset=utf8", 'root', '',
    Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));