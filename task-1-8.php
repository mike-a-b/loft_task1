<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 13.07.17
 * Time: 19:50
 */
echo "<h2>Задание # 1.8</h2>";
$str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cum cumque dolorem eum, eveniet fuga " .
"laborum laudantium nam quis soluta!";
echo "</br>";
echo $str;
$exp_arr = explode(" ", $str);
//var_dump($exp_arr);
$impl_arr = [];
$count = count($exp_arr)-1;
$count2 = 0;
do {
    $impl_arr[$count2] = ($exp_arr[$count] . "*");
    $count--;
    $count2++;
    if ($count == 0) {
        $impl_arr[] = $exp_arr[count($exp_arr)-($count2+1)];
    }
} while (/*++*/$count);
print_r($impl_arr);
$impl_arr = implode("*", $impl_arr);
echo $impl_arr . "</br>";
