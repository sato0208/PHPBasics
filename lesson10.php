
<?php

$prices = [100, 200, 300];


// 10パーセントの税をかけた配列を取得する
$newPrices = array_map(
  // 無名関数
  // function ($n) { return $n * 1.1; },
  // アロー関数
  fn($n) -> $n * 1.1,
  $prices
  );

  print_r($newPrices);