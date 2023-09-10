<?php
#chapter5
//比較演算子 bool型

$i = 1;
echo "等しいかどうか\n";
var_dump($i === 1); // 1 等しいからtrue
var_dump($i === 2); // 2 等しくないからfalse

//
echo "\n";
echo "等しくないかどうか\n";
var_dump($i !== 1); // 1 等しいからfalse
var_dump($i !== 2); // 2 等しくないからtrue

//
echo "\n";
echo "等しいかどうか（文字列）\n";
$s = 'abc';
var_dump($s === 'abc'); //等しいからtrue
var_dump($s === 'ABC'); //等しくないからfalse
var_dump($s === 'a'); //等しくないからfalse


// == と === の確認 その１
echo "\n";
echo "== と === の確認 その1\n";
var_dump($i == 1); //true
var_dump($i === 1); //true

// == と === の確認 その２
echo "\n";
echo "== と === の確認 その2\n";
var_dump($i == '1'); //true ==には、左辺/右辺で方が異なる場合は、PHPに定められたルールで型を変更してから比較する
var_dump($i === '1'); //false ===には左辺/右辺の方を確認し、方が違ったらfalseとする 実際はこっち(===)を使う場合が多い

//2a問題の確認
echo "\n";
echo "2a問題の確認\n";
$i = 2;
var_dump($i == '2a'); //数値「2」と文字列「2a」の比較 PHP7以前ではtrueになる PHP8ではfalseになる(現環境はPHP7.4なのでtrueが返る)
var_dump($i === '2a'); //型が違うからfalse