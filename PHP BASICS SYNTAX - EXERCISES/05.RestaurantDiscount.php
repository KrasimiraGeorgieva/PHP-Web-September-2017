<?php
$groupSize = intval(fgets(STDIN));
$servicePackage = readline();

$hallName = "hall";
$hallPrice = 0;
$packagePrice = 0;
$totalPrice = 0;
$pricePerPerson = 0;

if ($groupSize > 0 && $groupSize <= 50){
    $hallName = "Small Hall";
    $hallPrice = 2500;

    if ($servicePackage == "Normal"){
        $packagePrice = 500;
        $totalPrice = ($hallPrice + $packagePrice) * 0.95;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo "We can offer you the $hallName"."\r\n";
        echo "The price per person is $pricePerPerson$";
    }
    else if ($servicePackage == "Gold"){
        $packagePrice = 750;
        $totalPrice = ($hallPrice + $packagePrice) * 0.90;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo "We can offer you the $hallName". "\r\n";
        echo "The price per person is $pricePerPerson$";
    }
    else if ($servicePackage == "Platinum"){
        $packagePrice = 1000;
        $totalPrice = ($hallPrice + $packagePrice) * 0.85;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo "We can offer you the $hallName" . "\r\n";
        echo "The price per person is $pricePerPerson$";
    }
}
else if ($groupSize > 50 && $groupSize <= 100){
    $hallName = "Terrace";
    $hallPrice = 5000;

    if ($servicePackage == "Normal"){
        $packagePrice = 500;
        $totalPrice = ($hallPrice + $packagePrice) * 0.95;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo("We can offer you the $hallName" ."\r\n");
        echo ("The price per person is $pricePerPerson$");
    }
    else if ($servicePackage == "Gold"){
        $packagePrice = 750;
        $totalPrice = ($hallPrice + $packagePrice) * 0.90;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo("We can offer you the $hallName"."\r\n");
        echo ("The price per person is $pricePerPerson$");
    }
    else if ($servicePackage == "Platinum"){
       $packagePrice = 1000;
       $totalPrice = ($hallPrice + $packagePrice) * 0.85;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo("We can offer you the $hallName"."\r\n");
        echo ("The price per person is $pricePerPerson$");
    }
}
else if ($groupSize > 100 && $groupSize <= 120) {
    $hallName = "Great Hall";
    $hallPrice = 7500;

    if ($servicePackage == "Normal"){
        $packagePrice = 500;
        $totalPrice = ($hallPrice + $packagePrice) * 0.95;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo("We can offer you the $hallName"."\r\n");
        echo ("The price per person is $pricePerPerson$");
    }
    else if ($servicePackage == "Gold"){
        $packagePrice = 750;
        $totalPrice = ($hallPrice + $packagePrice) * 0.90;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo("We can offer you the $hallName"."\r\n");
        echo ("The price per person is $pricePerPerson$");
    }
    else if ($servicePackage == "Platinum"){
        $packagePrice = 1000;
        $totalPrice = ($hallPrice + $packagePrice) * 0.85;

        $pricePerPerson = sprintf('%0.2f', $totalPrice / $groupSize);
        echo("We can offer you the $hallName"."\r\n");
        echo ("The price per person is $pricePerPerson$");
    }
}
else {
    echo("We do not have an appropriate hall.");
}