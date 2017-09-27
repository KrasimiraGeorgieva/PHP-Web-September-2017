<?php
$arr = ['Sofia','20','Varna','10','Sofia','5'];
$sums = [];

for ($i =0; $i < count($arr); $i +=2){
    $town = $arr[$i];
    $income = $arr[$i+1];

    if (!isset($sums[$town])){
        $sums[$town] = 0;
    }

    $sums[$town] += $income;
}

echo '[';
$i = 0;
foreach ($sums as $key => $val) {
    $result = '"' . $key . '"' . ' => ' . '"'. $val . '"';
    if ($i < count($sums) - 1){
        echo $result . ', ';
        $i++;
    }
    else{
        echo  ($result);
    }

}
echo  ']';
