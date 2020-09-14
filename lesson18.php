<?php

// saburo.txtが見つからなかった場合の処理
// if (file_exists('data/saburo.txt') === false) { 
if (!file_exists('data/saburo.txt')) {
  echo 'Sabro not here!' . PHP_EOL;
  exit;
}
// データディレクトリがあるかチェックする
if (file_exists('data') === true) {
  echo 'data exists!' . PHP_EåOL;
}

// 書き込み可能かチェックする
if (is_writable('data/taro.txt') === true) {
  echo 'taro is writable!' . PHP_EOL;
}
// 読み込み可能かチェックする
if (is_readable('data/taro.txt') === true) {
  echo 'taro is readable!' . PHP_EOL;
}