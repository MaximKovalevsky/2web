<?php
function increaseEnthusiasm($string)
{
    return $string . "!";
}

echo increaseEnthusiasm("HealingFields");
echo "<br>";
echo "\n";

function repeatThreeTimes($string)
{
    return $string . $string . $string;
}

echo repeatThreeTimes("OOOOps");
echo "<br>";
echo "\n";

echo increaseEnthusiasm(repeatThreeTimes("ahahahah"));
echo "<br>";
echo "\n";

function cut($str, $num = 10)
{
    if (strlen($str) <= $num)
    {
        return $str;
    }
    else
    {
        $result = '';
        for ($i = 0; $i < $num; $i++)
        {
            $result .= $str[$i];
        }
        return $result;
    }
}

echo cut("WeatherMan", 7);
echo "<br>";
echo "\n";

$arr = array(1, 43, 5, 7, 68, 12, 22, -100);

function elementsOfArr($arr, $len, $i = 0)
{
    if ($i == $len)
    {
        return;
    }
    echo $arr[$i] . " ";
    $i++;
    elementsOfArr($arr, $len, $i);
}

elementsOfArr($arr, count($arr));
echo "<br>";
echo "\n";

function sumOfDigits($number)
{
    while ($number > 9)
    {
        $sum = 0;
        while ($number > 0)
        {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int)($number / 10);
        }
        $number = $sum;
    }
    return $number;
}

$number = 1237327;
$result = sumOfDigits($number);
echo "Сумма цифр числа $number = $result";