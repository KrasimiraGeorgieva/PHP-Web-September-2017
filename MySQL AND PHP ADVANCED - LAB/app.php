<?php
include "db_confing.php";
include "Transaction.php";
$shop = new Transaction($db);
$shop->main();