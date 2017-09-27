<?php
$str = trim(fgets(STDIN));

if (isPalindrome($str)){
    echo 'true';
}
else{
    echo 'false';
}

function isPalindrome($input) {
    for ($i = 0; $i < strlen($input) / 2; $i++) {
        if ($input[$i] != $input[strlen($input) - $i - 1]){
            return false;
        }
    }
    return true;
}