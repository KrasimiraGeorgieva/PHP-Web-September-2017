<?php
include 'db_confing.php';

$db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = $db->query("SELECT `peak_name`, `elevation`
FROM `peaks`
WHERE `elevation` > 6700
AND `mountain_id` = 3");

foreach ($result as $i => $iv){
    echo $iv['peak_name']. ','.$iv['elevation']."\r\n";
}