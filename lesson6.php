

<?php

$scores = [30, 40, 50, 60, 70, 80];

array_splice($scores, 2, 3, 100);
array_splice($scores, 2, 0, [100,101]);


print_r($scores);