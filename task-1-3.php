<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 2:13
 */

echo "<h2>Задание # 1.3</h2>";

define("CUSTOM_PI", 3.14, true);

if (defined("CUSTOM_PI")) {
    //Если существует выводим константу
    echo "Константа существует и равно - " . CUSTOM_PI. "</br>";
    //пробуем изменить  - Константу нельзя менять - fatal error;
/*    try{
        CUSTOM_PI++; //throw exception
    } catch (Exception $exp) {
        echo $exp->getMessage();
    } finally {
        echo "Константу не изменить !" . "<br/>";
    }*/
}