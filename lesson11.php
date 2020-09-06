
<?php

$numbers = range(1, 10);

// trueのもののみ配列に返す
$evenNumbers = array_filter(
  // 渡すための配列
  $numbers,
  // 条件
  // function ($n){
    // if ($n % 2 == 0)
    //   return true;
    // } else {
    //   return false;
    // }
    // return $n % === 0;
  // }
   fn($n) -> $n % 2 === 0
);

print_r($evenNumbers);