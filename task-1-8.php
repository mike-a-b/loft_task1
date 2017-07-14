<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 19:50
 */
echo "<h2>Задание # 1.8 v.2</h2>";
$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cum cumque dolorem eum, eveniet fuga " .
"laborum laudantium nam quis soluta!";
echo "$str</br>";

$exp_arr = explode(" ", $str);
//var_export($exp_arr);

foreach ($exp_arr as $item) {
    echo "$item ";
}

$result = [];
foreach ($exp_arr as &$item) {
    $res_str = "";
    $i = 0;
    $c = strlen($item)-1;
    do {
        $swap = $item[$i];
        $item[$i] = $item[$c];
        $item[$c] = $swap;
        $c--;
        $i++;
    } while ($i <= $c);
    $result[] = $item;
}

$exp_arr = implode("*", $result);
echo "$exp_arr<br/>";