<?php
if (isset($_GET['names']) && isset($_GET['ages']) && isset($_GET['delimiter'])) {
    $delimiter = trim($_GET['delimiter']);
    $names =  explode($delimiter, $_GET['names']);
    $ages =  explode($delimiter, $_GET['ages']);
    $students = [];
    for ($i = 0; $i < sizeof($ages); $i++) {
        $student = (object)[];
        $student->name = $names[$i];
        $student->age = $ages[$i];
        if($student->age >= 18){
            array_push($students, $student);
        }
    }
}
include '2.3.filterLegalStudent_fronted.php';