<?php

// $dp = opendir('data');
// while (($item = readdir($dp)) !== false) {
//   if ($item === '.' || $item === '..') {
//     continue;
//   }
//   echo $item . PHP_EOL;
// }

// 結果を配列で返す
foreach (glob('data/*.txt') as $item) {
  // echo $item . PHP_EOL;
  // ファイル名のみを取得する
  echo basename($item) . PHP_EOL;
}