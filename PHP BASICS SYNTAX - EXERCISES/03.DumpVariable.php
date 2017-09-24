<?php
//"hello"
//15
//1.234
//array(1, 2, 3)
//(object)[2, 34]

$input = 1.234;

if(is_numeric($input)){
    echo var_dump($input);
}
else{
    $input = gettype($input);
    echo $input;
}