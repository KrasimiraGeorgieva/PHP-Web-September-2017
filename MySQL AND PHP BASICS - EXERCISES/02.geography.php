<?php
include 'db_confing.php';

$db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//2.1.Gets from MySQL the names and codes of all continents.
//$result = $db->query("SELECT * FROM `continents`");
//foreach ($result as $i => $continent){
//    print_r($continent);
//    echo "\n\r";

//2.2. Prints only the names of the continents.
$result = $db->query("SELECT continent_name FROM `continents`");
foreach ($result as $continentName){
    echo $continentName['continent_name'];
    echo "\n\r";
}