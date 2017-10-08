<?php
declare(strict_types = 1);
require_once 'BoxDataValidation.php';

$input = [];
for ($i = 0; $i<3; $i++) {
    $input[] = floatval(fgets(STDIN));
}
$box = new BoxDataValidation($input[0], $input[1], $input[2]);
echo $box;