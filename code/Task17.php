<?php
$arr = array();
function xmas($array, $c)
{
    for ($i = 1; $i <= $c; $i++)
    {
        $array[] = str_repeat("x", $i);
    }
    foreach ($array as $value)
    {
        echo "\n";
        echo $value;
    }
}
echo xmas($arr, 4);

$arr1 = array();

function arrayFill($elem, $c)
{
    for ($i=0; $i<$c; $i++)
    {
        $arr1[] = $elem;
    }

    foreach ($arr1 as $value)
    {
        echo "\n";
        echo $value;
    }
}
echo arrayFill('x', 9);

$arr2d = array(array(1, 2, 3), array(5, 23), array(12));
function get2dArr($arr2d)
{
    $sum = 0;
    foreach ($arr2d as $array)
    {
        foreach ($array as $elem)
        {
            $sum += $elem;
        }
    }
    return $sum;
}

echo get2dArr($arr2d);

echo "<br>";
echo "\n";

$c = 1;
$arr2d = array();
for ($i = 0; $i < 3; $i++)
{
    for ($j = &$c; $j < 10; $j++)
    {
        $arr2d[$i][] = $j;
    }
}
foreach ($arr2d as $array)
{
    foreach ($array as $elem)
    {
        echo $elem . ' ';
    }
}

echo "<br>";
echo "\n";

$arr3 = array(2, 5, 3, 9);

$firstAndSecond = $arr3[0] * $arr3[1];
$thirdAndFourth = $arr3[2] * $arr3[3];
$result = $firstAndSecond + $thirdAndFourth;
echo $result;

echo "<br>";
echo "\n";

$user = array('name' => 'Maxim', 'surname' => 'Kovalevsky', 'patronymic' => 'Vitasovich');
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

echo "<br>";
echo "\n";

$date = array('year' => 2024, 'month' => 2, 'day' => 21);
$str = '';
foreach ($date as $value)
{
    $str .= $value . '-';
}
$str = substr($str, 0, -1);
echo $str;

echo "<br>";
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
$c = 0;
foreach ($arr as $elem)
{
    $c++;
}
echo $c;
echo $arr[$c - 1];
echo $arr[$c - 2];