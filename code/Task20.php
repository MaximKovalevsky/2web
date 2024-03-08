<?php
$arr = array(1,4334,12334,142,543,1234);
$average = array_sum($arr) / count($arr);

echo $average;
echo "<br>";
echo "\n";

function sum1to100($x)
{
    return $x*($x + 1) / 2;
}

echo sum1to100(100);
echo "<br>";
echo "\n";

$arr = array(1,4334,12334,142,543,1234);
$sqrtElementsArr = array_map('sqrt', $arr);

foreach ($sqrtElementsArr as $elem)
{
    echo $elem . ' ';
}

echo "<br>";
echo "\n";

$key = range('a', 'z');
$value = range(1, 26);
$arr1 = array_combine($key, $value);

foreach ($arr1 as $key => $value)
{
    echo "key: $key; value: $value";
    echo "<br>";
    echo "\n";
}

$str = '1234567890';
$sumOfPair = intval($str[0].$str[1]) + intval($str[2].$str[3]) + intval($str[4].$str[5]) + intval($str[6].$str[7]) + intval($str[8].$str[9]);
echo $sumOfPair;