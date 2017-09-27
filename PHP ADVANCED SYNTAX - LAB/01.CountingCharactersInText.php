<?php
$text = trim(fgets(STDIN));
//$text = "Hello";
$letters = [];
$text = strtolower($text);
for ($i = 0; $i < strlen($text); $i++) {
    $char = $text[$i];
    if (ord($char) >= ord('a') && ord($char) <= ord('z')) {
        if (isset($letters[$char])) {
            $letters[$char]++;
        } else {
            $letters[$char] = 1;
        }
    }
}
echo '[';
$i = 0;
foreach ($letters as $key => $val) {
    $print = "\"{$key}\" => \"{$val}\"";
    if ($i < count($letters) - 1){
        echo $print . ', ';
        $i++;
    }
    else {
        echo($print);
    }
}

echo  ']';
