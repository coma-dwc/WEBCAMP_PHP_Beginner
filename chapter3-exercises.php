<?php
#chapter3 演習問題
//問1：1,800円の商品で、消費税が10%の時の「税込み価格」の表示をするプログラム
//変数名：税抜き価格を$price  税込み価格を$price_with_tax

// #商品価格を代入
$price = 1800;

// #税込み価格の計算
$price_with_tax = $price * 1.10;

// #税込価格の表示
echo "{$price_with_tax} \n";


//問２：自分の「姓」と「名」を別々の変数に代入し、結合して出力
//変数名：姓を$family_name  名を$first_name

//姓と名の代入
$family_name = "KMT";
$first_name = "KNK";

//結合して出力
echo "{$family_name} {$first_name} \n";