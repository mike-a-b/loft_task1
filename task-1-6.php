<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 16:43
 */

echo "<h2>Задание # 1.6</h2>";
$A=[];
$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => "2005"];
$toyota = ["model" => "corolla", "speed" => 60, "doors" => 4, "year" => "1995"];
$opel = ["model" => "vectra", "speed" => 180, "doors" => 5, "year" => "2005"];
$A = [$bmw, $toyota, $opel];
print_r($A);
