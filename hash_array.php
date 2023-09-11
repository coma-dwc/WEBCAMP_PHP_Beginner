<?php
//連想配列(hash配列)

//
$hash_array = [
  "key1" => "Hello",
  "key2" => 3.14,
  "key3" => 999,
];
//
var_dump($hash_array);


//連想配列が普通の配列と異なる点
//・keyを明示的に書く
//・keyとvalueは=>でつなげる