<?php
$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

if ($num1 < $num2) {
    for ($i = $num1; $i <= $num2; $i++) {
        echo($i) . "\n\r";
    }
} else {
    for ($i = $num2; $i <= $num1; $i++) {
        echo $i . "\n\r";
    }
}