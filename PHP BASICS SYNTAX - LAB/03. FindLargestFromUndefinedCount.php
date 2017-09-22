<?php
/*
$numbers = [];
while(true){
    $line = trim(fgets(STDIN));
    if(empty(($line))){
        break;
    }

    $number = intval($line);
    $numbers[] = $number;
}

echo "Max: " . max($numbers);
*/

/*
$largest = 0;
while($number = intval(fgets(STDIN))){
    if($number > $largest){
        $largest = $number;
    }
}
echo "Max: $largest";
*/

$largest = 0;
while($number = intval(fgets(STDIN))){
    $largest = max($largest,$number);
}
echo "Max: $largest";