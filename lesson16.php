
<?php

// ファイルに書き込む
$contents = "taro\njiro\nsaburo\n";
file_put_contents('names.txt', $contents);

// ファイルを読み込む
$contents = file_get_contents('names.txt');
echo $contents;

// 配列の要素として読み込む（改行を削除する）
$lines = file('names.txt', FILE_IGNORE_NEW_LINES);
var_dump($lines);