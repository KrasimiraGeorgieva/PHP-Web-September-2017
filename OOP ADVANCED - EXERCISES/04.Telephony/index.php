<?php
declare(strict_types = 1);

require_once 'ICall.php';
require_once 'IBrowsing.php';
require_once 'Smartphone.php';

$smartphone = new Smartphone();

$callingNumbers = explode(' ', trim(fgets(STDIN)));
for ($c = 0; $c < count($callingNumbers); $c++) {
    $smartphone->Calling($callingNumbers[$c]);
}

$browsingUrls = explode(' ', trim(fgets(STDIN)));
for ($b = 0; $b < count($browsingUrls); $b++){
    $smartphone->Browsing($browsingUrls[$b]);
}