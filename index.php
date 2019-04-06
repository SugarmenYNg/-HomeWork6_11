<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork6_11</title>
</head>
<body>
<h2>Рекурсия</h2>
<p>1) Дано натуральное число N. Выведите все его цифры по одной, в обратном порядке, разделяя их пробелами или новыми<br>
    строками. При решении этой задачи нельзя использовать строки, массивы, циклы. Разрешена только рекурсия и<br>
    целочисленная арифметика.<br>
    Например дано число: 5671, вывод должен быть - 1 7 6 5.</p>
<p>2) Дана последовательность, в которой каждое натуральное число k встречается ровно k раз:<br>
    1, 2, 2, 3, 3, 3, 4, 4, 4, 4,… По данному натуральному n выведите первые n членов этой последовательности.<br>
    Попробуйте обойтись только одним циклом.</p>
<?php
declare(strict_type = 1);

echo "<b>Задание 1:</b><br>";
$n = 10;

echo "Дано натуральное число N = $n<br>";

function printBackWard(int $n) {
    if ($n < 10) {
        echo $n;
    } else {
        echo ($n%10)." ";
        printBackWard(intdiv($n, 10));
    }
}

printBackWard($n);

echo "<br><br>";
echo "<b>Задание 2:</b><br>";

$n = 7;

echo "По заданному натуральному числу n = $n выводим первые n = $n членов последовательности:<br>";

function printSequence(int $n) {
    $sum = 0;
    $j = 0;
    if ($n == 1) {
        echo $n;
    } else {
        for ($i = 1; $sum < $n; $i++) {
            $sum += $i;
            $j = $i;
        }
        echo printSequence(--$n);
        echo ", ".$j;
    }
}

printSequence($n);
?>
</body>
</html>
