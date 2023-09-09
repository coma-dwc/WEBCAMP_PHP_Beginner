<?php
#スカラー型 int  「整数を入れた変数」を用意し、var_dump()で確認

//整数型の確認
$i = 123;
var_dump($i);

//整数型の最大/最小値の確認
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

//「最大値」を超えた値はどうなる？
$over_max = PHP_INT_MAX + 1;
var_dump($over_max);

//「最小値」を下回った値はどうなる？
$under_min = PHP_INT_MIN - 1;
var_dump($under_min);


#「最大値を超える（オーバフロー）」や「最小値を下回る（アンダーフロー）」した値は、PHPの場合は「float」という型に変換されます。