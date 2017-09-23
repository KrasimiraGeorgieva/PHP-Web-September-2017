<?php
$input = 'appearance';
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
echo "<pre>";
foreach ($letters as $k => $v){
    echo $k .' -> '. $v . "\n";
}
echo"</pre>";