<?php
declare(strict_types = 1);
namespace Ferrari;

require_once 'IActions.php';
require_once 'Ferrari.php';

$input = trim(fgets(STDIN));
$ferrari = new Ferrari($input);
echo $ferrari;