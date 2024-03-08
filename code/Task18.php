<?php
function boolStatement($digit1, $digit2)
{
    if (($digit1 + $digit2) > 10)
    {
        return true;
    }
    else
    {
        return false;
    }
}

echo boolStatement(10, 2);

echo "<br>";
echo "\n";

function equalStatement($digit1, $digit2)
{
    if ($digit1 == $digit2)
    {
        return true;
    }
    else
    {
        return false;
    }
}

echo equalStatement(10, 10);

echo "<br>";
echo "\n";

$test = 0;
if (!$test) echo "верно";

function age()
{
    $age = 74;
    $sum = 0;
    if (($age < 10) or ($age > 99))
    {
        echo "Значение переменной age больше 99 или меньше 10";
    }
    else
    {
        while ($age > 0)
        {
            $digit = $age % 10;
            $sum += $digit;
            $age = (int)($age / 10);
        }
        echo "Сумма цифр данного числа = ", $sum;
        echo "<br>";
        echo "\n";
        if ($sum <= 9)
        {
            echo "Сумма цифр однозначна";
        }
        else echo "Сумма цифр двузначна";
    }
}

echo "<br>";
echo "\n";

echo age();

echo "<br>";
echo "\n";

function sumMas3()
{
    $arr = array(1,4,521,43,1,51,6562,21,3);
    $sum = 0;
    if (count($arr) == 3)
    {
        foreach ($arr as $elem)
        {
            $sum += $elem;
        }
    }
    if ($sum != 0)
    {
        return $sum;
    }
    else return "В массиве не 3 элемента";
}

echo sumMas3();