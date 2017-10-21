<?php
//<User_id> <param_name> <param_value>

try {
    $db = new PDO("mysql:host=localhost;dbname=php-course;charset=utf8", 'root', '*****',
        Array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $studentInfo = explode(' ', trim(fgets(STDIN)));
    $student_id = intval($studentInfo[0]);
    $param_name = $studentInfo[1];
    $param_value = $studentInfo[2];

        $db_stm = $db->prepare("UPDATE students SET $param_name = :param_value
                WHERE student_id = :student_id");

        $db_stm->bindParam('param_value', $param_value);
        $db_stm->bindParam('student_id', $student_id);
        $db_stm->execute();
}
catch(PDOException $e)
{
    exit('Parameter name does not exist!' . $e->getMessage());
}
$db = null;