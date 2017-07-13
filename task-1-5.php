<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 15:32
 */
echo "<h2>Задание # 1.5</h2>";

$day = mt_rand(0, 10 );

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день"."<br/>";
        break;
    case 6:
    case 7:
        echo "Это выходной день"."<br/>";
        break;
    default:
        echo "Это неизвестный день"."<br/>";
}
