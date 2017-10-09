<?php
declare(strict_types = 1);

require_once "Human.php";
require_once "Student.php";
require_once "Worker.php";

do{
    $input_str = trim(fgets(STDIN));
    $input_str = explode(' ', $input_str);
    if (count($input_str) == 3){
        //Student
        $student = new Student($input_str[0], $input_str[1], $input_str[2]);
        echo $student;
    }
    elseif (count($input_str) == 4){
        //Worker
        $worker = new Worker($input_str[0], $input_str[1],floatval($input_str[2]), floatval($input_str[3]));
        echo $worker;
    }
}
while(!empty($input_str));