<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12.07.17
 * Time: 19:14
 *
 *  * code sniffer enable
 * code style PSR2
 * emmet plugin and gitignore active
 *
 * every task i will require to this file
 */
echo "<h2>1.1 Задание #1</h2>";

//переменные
$name = "Mikhail";
$age = "28";
echo "Меня зовут: $name"."<br/>";
echo "Мне $age лет"."<br/>";

//создаю массив символов для обрамления фразы
/**
 * Выведите следующий набор символов, включая кавычки - “ ! | \ / ’ ” \
 * (двойная кавычка, воскл. знак, вертикальная черта, обратный слэш, слэш, кавычка, двойная кавычка, обратный слэш)
 */
$chars_arr = ["\"", "!", "|", "\\", "/", "'", "\"", "\\"];

// выводим данные в цикле
//print_r($chars_arr);
for ($i=0; $i<count($chars_arr); $i++) {
    echo "Мне "."$chars_arr[$i]"."28"."$chars_arr[$i]"." лет<br/>" ;
}
