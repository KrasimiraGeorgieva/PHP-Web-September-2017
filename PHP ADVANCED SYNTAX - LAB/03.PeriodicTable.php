<?php
$inputArr = explode(', ',trim(fgets(STDIN)));
$outputArr = [];
foreach (array_count_values($inputArr) as $key=>$value) {
    if ($value == 1){
        $outputArr[] = $key;
    }
}
foreach ($outputArr as $unique){
    echo $unique.' ';
}