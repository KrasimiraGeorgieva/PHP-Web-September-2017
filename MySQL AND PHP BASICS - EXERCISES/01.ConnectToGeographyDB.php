<?php
include 'db_confing.php';

try{
    $db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// QUERY -> SELECT * FROM `geography`.`countries_rivers` LIMIT 1000;