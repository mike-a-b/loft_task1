<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 6:24
 */

echo "<h2>Задание # 1.4</h2>";

$age = mt_rand(1,80);

if ($age >= 18 && $age <= 65) {
  echo  "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >=1 && $age <= 17) {
    echo  "Вам еще рано работать";
} else echo "Неизвестный возраст";