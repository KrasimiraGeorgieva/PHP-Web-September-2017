<?php
$numbers = explode(" ", trim(fgets(STDIN)));
$result = [];
foreach ($numbers as $number) {
    if (!array_key_exists($number, $result)) {
        $result[$number] = 0;
    }
    $result[$number]++;
}
ksort($result);
foreach ($result as $key => $value) {
    echo "{$key} -> {$value} times\n";
}