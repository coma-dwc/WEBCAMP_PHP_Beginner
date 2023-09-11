<?php
//explodeとimplode
//explode()は「文字列(string)を区切り文字で分割して配列を作る」機能
//implode()は「配列内の指定された文字列stringを結合して、文字列stringを作る」機能

// 元の文字列：「;」で区切られていると想定
$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列 \n";
var_dump($base_string);

// explode()で、;のところで分解
$exploded_array = explode(";", $base_string);
echo "\n explodeした配列 \n";
var_dump($exploded_array);

// implode()で、,(カンマ)でつなげて再組み立て
$imploded_string = implode(",", $exploded_array);
echo "\n implodeで繋げた文字列 \n";
var_dump($imploded_string);