<?php
declare(strict_types = 1);

require 'Computer.php';
require 'Mobile.php';
require 'IKeyboard.php';
require 'IMouse.php';
require 'ITouchScreen.php';
require 'DesktopComputer.php';
require 'Laptop.php';
require 'MobilePhone.php';
require 'Tablet.php';
require 'Notebook.php';

$d = new DesktopComputer('keyboard', 'Intel', '8GB');

$l1 = new Laptop(78, 'AMD', '8GB');
$l2 = new Laptop(85, 'Intel', '16GB');

$t = new Tablet('2048×1536', 'Bob', true, 62);

$m1 = new MobilePhone(5.5, 'Telenor', false, 15);
$m2 = new MobilePhone(6.1, 'Mobiltel', true, 38);
$m3 = new MobilePhone(4, 'Vivacom', true, 87);

$n = new Notebook('Intel', '8GB');

$n->pressKey();
echo "\r\n";
$l2->click(true,false);
echo "\r\n";
$t->writeText('I am developer.');
echo "\r\n";
$allDevices = [$d, $l1, $l2, $t, $m1, $m2, $m3, $n];
print_r($allDevices);