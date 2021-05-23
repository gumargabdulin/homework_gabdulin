<?php
//1. Задача
$arr=[];
function random($arr, $i)
{
    for ($i=0; $i<10; $i++)
    {
        $arr[$i]=rand(0,10);
        echo $arr[$i]."<br>";
    }

}
random($arr, $i);
//2 Задача
$str='HTML, CSS, PHP, BITRIX';
function count_word ($str, $count)
{
    $count=str_word_count($str);
    print_r ($count);
}
count_word($str, $count);
//3 задача.
$str='HTML, CSS, PHP, BITRIX';
function reverse_word($str, $reverse)
{
    $reverse=strrev($str);
    echo $reverse;
}
reverse_word($str, $reverse);
//4 задача
$str='HTML, CSS, PHP, BITRIX';
function dlinna_str($str, $dlinna)
{
    $dlinna=strlen($str);
    echo $dlinna;
}
dlinna_str($str, $dlinna);
//5 задача.
$str='HTML, CSS, PHP, BITRIX';
function new_str($str, $new_str)
{
    $new_str=str_split($str);
    foreach ($new_str as $value)
    {
        echo($value."<br>");
    }
}
new_str($str, $new_str);