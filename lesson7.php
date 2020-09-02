<?php

$scores = [40, 50, 20, 30];

sort($scores);
print_r($scores);

shuffle($scores);
print_r($scores);

$picked = array_rand($scores, 2);
echo $scores[$picked[0]] . PHP_EOL;
echo $scores[$picked[1]] . PHP_EOL;