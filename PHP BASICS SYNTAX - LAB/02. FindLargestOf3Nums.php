<?php
$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));
$num3 = intval(fgets(STDIN));

$arr = array($num1, $num2, $num3);
$maxNum = max($arr);
echo "Max: {$maxNum}";
