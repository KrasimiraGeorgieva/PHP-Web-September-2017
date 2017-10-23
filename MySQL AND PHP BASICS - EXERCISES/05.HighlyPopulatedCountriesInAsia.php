<?php
include 'db_confing.php';

$db = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
$result = $db->query("
SELECT `a`.`country_name`
FROM `countries` AS `a`, `continents` AS `b`
WHERE `a`.`continent_code` = `b`.`continent_code`
AND `a`.`population` > 1000000000
AND `b`.`continent_name` = 'Asia' ");

foreach ($result as $i => $iv){
    $output[] = $iv['country_name'];
}
echo implode("\r\n", $output);