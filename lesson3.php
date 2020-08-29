詳解PHP ビルトイン関数編
» #09 数学系の関数を使ってみよう

<?php

$n = 5.6283;

// 小数点以下を切り上げる
echo ceil($n) . PHP_EOL;
// 小数点以下を切り上げる
echo floor($n) . PHP_EOL;
// 四捨五入する(2けた)
echo round($n, 2) . PHP_EOL;

// ランダムに数を出す
echo mt_rand(1, 6) . PHP_EOL;

// マックス値を求める
echo max(3, 9, 4) . PHP_EOL;

// 最小値を求める
echo min(3, 9, 4) . PHP_EOL;

// 円周率
echo M_PI . PHP_EOL;
echo M_SQRT2 . PHP_EOL;
