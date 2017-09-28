<?php
$input = trim(fgets(STDIN));;
$letters = array();
for($i = 0; $i < strlen($input); $i++){
    $letter = $input[$i];
    if(!isset($letters[$letter])){
        $letters[$letter] = 1;
    }
    else{
        $letters[$letter]++;
    }
}
foreach ($letters as $k => $v){
    echo $k .' -> '. $v . "\n";
}
