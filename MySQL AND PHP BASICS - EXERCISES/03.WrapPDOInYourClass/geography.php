<?php
include '..\.\db_confing.php';
include 'mypdo.php';

try {
    $db = new MyPDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
    $db->setErrorException();

    $continents = $db->query("SELECT * FROM `continents`", PDO::FETCH_ASSOC);
    foreach ($continents as $i => $continent) {
        print_r($continent);
        echo("\n\r");
    }
    $continents = null; // Close connection
    $db         = null;
}catch (PDOException $e){
    print "PDO Error: " . $e->getMessage() . "<br/>";
}