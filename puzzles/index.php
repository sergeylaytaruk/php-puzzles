<?php

// function pre($a, $b=null, $c=null) {
//     echo '<pre>';
//     var_dump($a, $b, $c);
//     echo '</pre>';
// }

// Создать функцию even_to_zero(int $number) Которая цифры на четных позициях занулит. Например, из 12345 получается число 10305.
function even_to_zero(int $number): int
{
    return implode('', array_values(
        array_map(function($val, $key) {
            return ($key % 2 != 0) ? 0 : $val;
        }, mb_str_split($number), array_keys(mb_str_split($number)))
    ));
}

echo assert(even_to_zero(12345) == 10305);
echo '<br/>';
echo assert(even_to_zero(133461) == 103060);
echo '<br/>';
echo assert(even_to_zero(1556677889900) == 1050607080900);
echo '<br/>';
echo assert(even_to_zero(12345) != 12345);
echo '<br/>';

// Создать функцию is_palindrom(string $word) которая выведет true если строка является палиндромом
// (читается одинаково в зад и вперед, например: шалаш) и иначе false

function is_palindrom(string $word): bool
{
    return (mb_str_split($word) == array_reverse(mb_str_split($word)));
}

echo assert(is_palindrom('заказ'));
echo '<br/>';
echo assert(is_palindrom('довод'));
echo '<br/>';
echo assert(is_palindrom('кабак'));
echo '<br/>';
echo assert(!is_palindrom('рыба'));
echo '<br/>';
echo assert(!is_palindrom('козак'));
echo '<br/>';

// Написать функцию array_double, которая принимает на вход массив чисел, например [1,2,3] и возвращает массив,
// в котором все числа умножены на 2, например [2, 4, 6]

function array_double(array $input): array
{
    return array_values(
        array_map(function($val) {
            return $val * 2;
        }, $input)
    );
}

echo assert(array_double([1,2,3]) == [2,4,6]);
echo '<br/>';
echo assert(array_double([1,2,3]) != [1,2,3]);
echo '<br/>';
echo assert(array_double([5,10,20]) == [10,20,40]);
echo '<br/>';

// Написать функцию only_odd, котороая принимает массив [1, 2, 3] и возвращает массив непарных числе

function only_odd(array $input): array
{
    return array_values(
        array_filter($input, function($val) {
            if ($val % 2 != 0) {
                return $val;
            }
        })
    );
}

echo assert(only_odd([1,2,3]) == [1,3]);
echo '<br/>';
echo assert(only_odd([4,5,6,7]) == [5,7]);
echo '<br/>';
echo assert(only_odd([5,10,20]) == [5]);
echo '<br/>';