<?php

$fp = fopen('names.txt', 'w');

fwrite($fp, "taro/n");

fclose($fp);