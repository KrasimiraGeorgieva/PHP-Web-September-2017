<?php
//<First_name> <Last_name> <Studen_number> <Phone>

$inputNumber = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $inputNumber; $i++) {
    $studentInfo = explode(' ', trim(fgets(STDIN)));
    if (count($studentInfo) == 4) {
        $first_name = $studentInfo[0];
        $last_name = $studentInfo[1];
        $student_number = $studentInfo[2];
        $phone = $studentInfo[3];
    } elseif (count($studentInfo) == 3) {
        $first_name = $studentInfo[0];
        $last_name = $studentInfo[1];
        $student_number = $studentInfo[2];
    }

    $db = new PDO("mysql:host=localhost;dbname=php-course;charset=utf8", 'root', '*****',
                    Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $db_stm = $db->prepare('INSERT INTO students (first_name, last_name, student_number,phone)
                VALUES (:first_name, :last_name, :student_number, :phone)');

    $db_stm->bindParam('first_name', $first_name);
    $db_stm->bindParam('last_name', $last_name);
    $db_stm->bindParam('student_number', $student_number);
    $db_stm->bindParam('phone', $phone);

    $db_stm->execute();
}