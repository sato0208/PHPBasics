詳解PHP ビルトイン関数編
» #10 配列の要素を変更してみよう

<?php

$scores = [30, 40, 50];

// 配列に要素を追加する
array_unshift($scores, 10, 20);
array_push($scores, 60, 70);
$scores[] = 80;

// 配列から要素を削除する
array_shift($scores);
array_pop($scores);

print_r($scores);
