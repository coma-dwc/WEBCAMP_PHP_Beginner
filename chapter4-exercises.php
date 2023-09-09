<?php
#chapter4 演習問題
//問１：999の「数字（string）」と「数値（int）」をそれぞれ変数に代入して、var_dump()で出力
//変数名：$num_string $num_int

//数字(string)
$num_string = '999';
var_dump($num_string);

//数値(int)
$num_int = 999;
var_dump($num_int);


//問２：定数名 TEST_FLOAT に、小数 1.23 を定義して、var_dump()で出力

//定数の定義
define('TEST_FLOAT', 1.23);

//出力
var_dump(TEST_FLOAT);