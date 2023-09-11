<?php
//配列

//要素1つの配列を作成
$awk = [ 123 ];
var_dump($awk);

//要素3つの配列を作成
$awk2 = [ 999, "Hello", 3.14 ];
var_dump($awk2);

//要素1つの中身を見たり書き換えたりする
var_dump( $awk2[0] );

//書き換え
$awk2[0] = 654321;
var_dump( $awk2[0] );

//$awkに要素を追加
$awk[] = 1.41421356;
$awk[] = "string value";
var_dump($awk);