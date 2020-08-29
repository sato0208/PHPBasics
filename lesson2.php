詳解PHP ビルトイン関数編
» #08 文字列と配列を相互に変換してみよう

<?php

$d = [2020, 11, 15];
// 配列を文字列に埋め込む
echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
// 区切り文字で配列の要素を連結させる
echo implode('-', $d) . PHP_EOL;

// 文字列を配列の要素にする
$t = '17:32:45';
print_r(explode(':', $t));