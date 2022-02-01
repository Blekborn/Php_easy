<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
echo "1.Проверка пустой переменной при помощи isset()<br>";
$var = "";
if (isset($var)) {
    echo "Эта переменная определена, поэтому меня и напечатали.<br>";
}

echo "2.Инициализируем переменные \$a, \$b, \$c<br>
        a. Проверяем их существование через isset()<br>";
$a = 'one';
$b = 'two';
$c = 1;
var_dump(isset($a));
var_dump(isset($b,$c));

?>
</body>
</html>


