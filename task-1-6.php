<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 16:43
 */

echo "<h2>Задание # 1.6 v.2</h2>";

$bmw = ["name" => "bmw", "model" => "X5", "speed" => 120, "doors" => 5, "year" => "2005"];
$toyota = ["name" => "opel", "model" => "corolla", "speed" => 60, "doors" => 4, "year" => "1995"];
$opel = ["name" => "toyota", "model" => "vectra", "speed" => 180, "doors" => 5, "year" => "2005"];
$A = [];
$A = [$bmw, $toyota, $opel];
//var_export($A);

for ($i = 0; $i < count($A); $i++) {
    echo "CAR {$A[$i]["name"]}<br/>";
    foreach ($A[$i] as $v) {
        echo "$v ";
    }
    echo "<br/>";
}