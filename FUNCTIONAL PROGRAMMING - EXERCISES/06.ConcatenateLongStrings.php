<?php
$input = ['Hello ', 'there.', 'This is just another long string, ',
    'that would pass the check.', ' but',' this', ' will',' not', 'pass it.'];
$above = 20;

$concatLongStr = function ($minLen, $strings) use ($above){
    if (strlen($strings) > $above){
        return $minLen .= $strings;
    }
     return $minLen;
};
echo "'";
print_r(array_reduce($input, $concatLongStr));
echo "'";