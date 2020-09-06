<?php

$a = [3, 4, 8];
$b = [4, 8, 12];

// a,bの配列をマージする
// $merged = [...$a...$b];
print_r($merged);

// 重複文を削除して配列にする
$uniques = array_unique($merged);
print_r($uniques);

// aからbを削除して残りの要素を表示する
$diff1 = array_diff($a, $b);
print_r($diff1);

$diff2 = array_diff($b, $a);
print_r($diff2);

// 共通の要素を配列に返す
$common = array_intersect($a, $b);
print_r($common);