<?php
ini_set('error_reporting', E_ALL);
// Целые числа
$numb0 = 1234; // десятичное число
$numb1 = +143; // десятичное число
$numb = -342; // отрицательное число
$numb3 = 0123; // восьмеричное число
$numb4 = 0x1A; // шестнадцатиричное число
// Вещественные числа
$var = 1.123;
// Логический тип boolean
// true
// false
// Строчный тип
$str = "Hello, \n world - $numb0";
$str1 = "Some  text - $numb0";
$str2 = "Some text - \'34\'";
echo $str2;

// Неинициализированная переменная
$some; // Notice
// Специальный тип null
$var2 = null;
unset($str2, $str);

?>