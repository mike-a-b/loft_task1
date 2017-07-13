<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 18:46
 */

echo "<h2>Задание # 1.7</h2>";

echo "<table>";
for ($v1 = 1; $v1 <= 10; $v1++) {
    echo "<tr>";
    for ($v2 = 1; $v2 <= 10; $v2++) {
        echo "<td> ".$v1 * $v2 . " </td>";
    }
    echo "</tr>";
}
echo "</table>";