<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 18:46
 */

echo "<h2>Задание # 1.7 v.2</h2>";

echo "<table style='border:1px solid black; border-collapse: collapse;'>";
for ($v1 = 1; $v1 <= 10; $v1++) {
    echo "<tr>";
    for ($v2 = 1; $v2 <= 10; $v2++) {
        if (($v1 % 2 === 0) && ($v2 % 2 === 0)) {
            echo "<td style='border:1px solid black;'>&nbsp[" . $v1 * $v2 . "]&nbsp</td>";
        } else {
            echo "<td style='border:1px solid black;'>&nbsp(" . $v1 * $v2 . ")&nbsp</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";