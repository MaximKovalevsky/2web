<?php
//Работа с %
$a = 10;
$b = 3;
$result = $a % $b;

echo $result;
echo "<br>";
echo "\n";

if ($result == 0)
{
    echo "Делится";
    echo $a / $b;
}
else
{
    echo "Делится с остатком: ";
    echo $result;
}

echo "<br>";
echo "\n";

//Работа со степенью и корнем
$c = pow(2,10);
echo sqrt(245);

echo "<br>";
echo "\n";

$arr = array(4,2,5,19,13,0,10);
$sum = 0;
foreach ($arr as $value)
{
    $sum += pow($value, 2);
}
echo "Корень из суммы квадратов элементов массива: " . sqrt($sum);

echo "<br>";
echo "\n";

//Работа с функциями округления
$sqrtFrom = sqrt(379);

echo round($sqrtFrom);
echo "<br>";
echo "\n";
echo round($sqrtFrom,1);
echo "<br>";
echo "\n";
echo round($sqrtFrom,2);

echo "<br>";
echo "\n";

$sqrtFrom1 = sqrt(587);

$floor_ceil = array("floor" => floor($sqrtFrom1), "ceil" => ceil($sqrtFrom1));

//Работа с min и max
$mas = array(4,-2,5,19,-130,0,10);

echo min($mas);
echo "<br>";
echo "\n";
echo max($mas);

//Работа с рандомом
echo rand(1,100);

for ($i = 0; $i < 10; $i++)
{
    $randmass[] = rand();
}

foreach ($randmass as $value)
{
    echo $value . " ";
}
echo "<br>";
echo "\n";

//Работа с модулем
for ($i = 0; $i < 3; $i++)
{
    $a = rand(1, 25);
    $b = rand(1, 25);
    echo abs($a - $b);
    echo "<br>";
    echo "\n";
}

$arr1= array(1,2,-1,-2,3,-3);
$arr2= [];

foreach ($arr1 as $value)
{
    $arr2[] = abs($value);
}

foreach ($arr2 as $value)
{
    echo $value . " ";
}


echo "<br>";
echo "\n";

//Общее
//1 пункт
$digit = 35;

$arr3 = [];

for ($i=1; $i <= 28; $i++)
{
    if (($digit % $i) == 0)
    {
        $arr3[] = $i;
    }
}

foreach ($arr3 as $value)
{
    echo $value . " ";
}

echo "<br>";
echo "\n";

//2 пункт
$arr4 = array(1,2,3,4,5,6,7,8,9,10);
$sum1 = 0;
$c = 0;
foreach ($arr4 as $value)
{
    $sum1 += $value;
    $c += 1;
    if ($sum1 > 10)
    {
        echo "Количество первых элементов массива: $c.";
        break;
    }
}