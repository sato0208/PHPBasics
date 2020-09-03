
<?php

$scores = array_fill(0, 5, 10);
$scores = range(1, 10);
$scores = range(1, 10, 2);

print_r($scores);

echo array_sum($scores) . PHP_EOL;
echo max($scores) . PHP_EOL;
echo min($scores) . PHP_EOL;
echo array_sum($scores) / count($scores) . PHP_EOL;