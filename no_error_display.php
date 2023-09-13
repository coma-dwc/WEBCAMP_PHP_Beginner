<?php
//現在は大体のエラーが出る設定になっているので、「エラーを非表示にする」サンプルを書く

//エラーを非表示にする
ini_set('display_errors', '0');
error_reporting(0);

//
var_dump($dummy);
//
$awk = [];
echo "{$awk[0]} \n";