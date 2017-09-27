<?php
//$input = 1234;
//$input = 145;
//$input = 15;
$input = 247;
$n = 100;
$arr = [];
for ($i = $n; $i <= $input; $i++) {
    if (isDistinct($i)) {
        array_push($arr, $i);
    }
}
if (sizeof($arr) === 0) {
    echo 'no';
} else {
    echo implode(', ', $arr);
}
function isDistinct($number)
{
    $number = '' . $number;
    $current = [];
    for ($i = 0; $i < strlen($number); $i++) {
        $currentNum = $number[$i];
        if (in_array($currentNum, $current)) {
            return false;
        }
        array_push($current, $currentNum);
    }
    return true;
}