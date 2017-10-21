<?php
//<User_id>

$servername = "localhost";
$username = "root";
$password = "*****";
$dbname = "php-course";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $studentId = intval(fgets(STDIN));

    $db_stm = $db->prepare("DELETE FROM students WHERE student_id = :student_id");
	
    $db_stm->bindParam('student_id', $studentId);
    $db_stm->execute();
}
catch(PDOException $e){
    exit('Connection failed ' . $e->getMessage());
}
$db = null;