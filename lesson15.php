<?php

$fp = fopen('names.txt', 'r');
$contents = fread($fp, filesize('names.txt'));
fclose($fp);
echo $contents;

$fp = fopen('names.txt', 'r');
while (($line = fgets($fp)) !== false) {
  echo $line;
}
echo $contents;