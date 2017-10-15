<?php
declare(strict_types = 1);
namespace Ferrari;

require_once 'IActions.php';
require_once 'Ferrari_3_1.php';

do{
    $input = trim(fgets(STDIN));
    $ferrari = new Ferrari_3_1($input);
    echo $ferrari . "\r\n";
}
while($input != '');

