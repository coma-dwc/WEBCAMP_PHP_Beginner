<?php
//ユーザー定義関数
//functionで定義し、その後ろに「関数名」「引数」「処理」「戻り値」を書く
//まず初めに「数値を引数で受け取り、値を2倍にして出力する(戻り値にする)関数」を作る

//「引数の値を2倍にする」関数
// function numToDouble($i)
// function numToDouble(int $i) //(型宣言)今回書き換えた箇所 その1
function numToDouble(int $i): int //今回書き換えた箇所 その1(戻り値の型も宣言)
{
  //値を2倍にする
  $ret = $i * 2;

  //戻り値
  return $ret;
}
//
$num = numToDouble(10);
echo "10 を2倍にしたら {$num} になった \n";

//2つの引数を「加算する」関数
// function numAdd($a, $b)
// function numAdd(int $a, int $b) //(型宣言)今回書き換えた箇所 その2
function numAdd(int $a, int $b): int //今回書き換えた箇所 その2(戻り値の型も宣言)
{
  //加算する
  $ret = $a + $b;

  //戻り値
  return $ret;
}
//
$add = numAdd(5, 6);
echo "5 と6を足したら {$add} になった \n";



/*今回のnumAdd()関数で、引数が「intまたはfloatであること」という制約は、PHP7までは書けない
PHP8以降は以下の書式で可能

2つの引数を「加算する」関数
function numAdd(int|float $a, int|float $b): int|float
{
*/

