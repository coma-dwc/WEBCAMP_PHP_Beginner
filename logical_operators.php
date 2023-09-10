<?php
//論理演算子
echo "論理演算子の確認\n";
var_dump( true && false ); //false(両方とも満たされる必要がある)
var_dump( true || false ); //true(どちらか一方が満たされればよい)

//ユーザーの情報
$age = 20;
$point = 499;

//「論理演算子+比較演算子」
echo "\n";
echo "「かつ」の場合\n";
var_dump( ($age >= 20)&&($point >= 500) ); //年齢が20歳以上、"かつ"、ポイントが500ポイント以上  結果=> false どっちも満たされる必要があるからfalse(ここではポイント数が満たない) 論理積

echo "\n";
echo "「または」の場合\n";
var_dump( ($age >= 20)||($point >= 500) ); //年齢が20歳以上、"または"、ポイントが500ポイント以上 結果=> true どちらか一方が満たされればよい(年齢は満たしている) 論理和