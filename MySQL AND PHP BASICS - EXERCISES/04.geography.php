<?php
include 'db_confing.php';

try {
    $db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
    $result = $db->query("SELECT continent_name, continent_code FROM `continents`");

    $output = '';
    foreach ($result as $continent) {
        $output .= $continent['continent_name'] . " ($continent[continent_code])" . ', ';
    }
    echo rtrim($output, ', ');

        $continents = null; // Close connection
        $db         = null;
}catch (PDOException $e) {
    print "PDO Error: " . $e->getMessage() . "<br/>";
}