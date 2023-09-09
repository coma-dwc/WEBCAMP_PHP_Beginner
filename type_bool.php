<?php
#bool(boolean)は「論理型」「真偽値」「真理値」「ブール型」などと呼ばれている
#bool型は、「真（true）または偽（false）のどちらかの値をもつ」型

//値を入れる
$bool_t = true;
$bool_f = false;
var_dump($bool_t);
var_dump($bool_f);

//trueやfalseは、大文字で書いても良い
$bool_t_large = TRUE;
var_dump($bool_t_large);