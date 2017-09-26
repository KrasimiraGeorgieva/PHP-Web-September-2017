<?php
$input = trim(fgets(STDIN));
if (strlen($input) <= 20){
    $diff = 20 - strlen($input);
    $wordLen = str_repeat("*", $diff);
    echo "$input"."$wordLen";
}
else {
    echo "Enter valid input!";
}