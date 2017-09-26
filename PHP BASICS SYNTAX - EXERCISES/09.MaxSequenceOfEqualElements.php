<?php
$input = array_filter(array_map('trim', explode(' ', fgets(STDIN))));
$longest = 0;
$startIndex = -1;
for ($i = 0; $i < count($input); $i++) {
    $currentCount = 1;
    for ($k = $i + 1; $k < count($input); $k++) {
        if ($input[$k] == $input[$i]) {
            $currentCount++;
        } else {
            break;
        }
    }
    if ($currentCount > $longest) {
        $longest = $currentCount;
        $startIndex = $i;
    }
}
echo implode(' ', array_fill(0, $longest, $input[$startIndex]));