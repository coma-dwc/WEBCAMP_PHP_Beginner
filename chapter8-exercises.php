<?php
#chapter8：演習問題
//問１：色の名前「Red」「Yellow」「Green」「Blue」「Black」をそれぞれ要素に含む、1つの配列を作成
//またそれをforeachを使って出力

$colors = [
  "Red",
  "Yellow",
  "Green",
  "Blue",
  "Black",
];
//
foreach($colors as $v) {
  echo "{$v} \n";
}


//問２：色とカラーコード「Red/ #ff0000」「Yellow/ #ffff00」「Green/ #00ff00」「Blue/ #0000ff」「Black/ #000000」がある
//色の名前をkey(添字)に、16進数カラーコードをvalue(値)にもつ連想配列を作成
//また、foreachを使って「色の名前と16進数カラーコード」を出力

$colors = [
  "Red" => "#ff0000",
  "Yellow" => "#ffff00",
  "Green" => "#00ff00",
  "Blue" => "#0000ff",
  "Black" => "#000000",
];
//
foreach($colors as $k => $v) {
  echo "{$k}: {$v} \n";
}