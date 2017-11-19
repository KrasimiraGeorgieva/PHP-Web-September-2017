<?php
session_start();
spl_autoload_register();

$dbInfo = parse_ini_file("Config/db.ini");
$db = new \Database\PDODatabase(new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']));
$template = new \Core\Template();
$dataBinder = new \Core\DataBinder();