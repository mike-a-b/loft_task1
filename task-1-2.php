<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 12.07.17
 * Time: 19:38
 */
echo "<h2>Задание # 1.2</h2>";

$pictures = ["all" => "80", "pensils" => "23", "pens" => "40", "total" => ""];

//continue 00:50 commit , branch, and push

if (isset($pictures)) {
    $pictures['total'] = ($pictures["all"] - ($pictures["pensils"]+$pictures["pens"]));
    if (!empty($pictures["total"]) && ($pictures["total"] > 0)) {
        echo "Дети раскрасили красками: ". $pictures["total"] . "<br/>";
    }
}
