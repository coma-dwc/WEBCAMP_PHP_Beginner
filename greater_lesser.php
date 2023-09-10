<?php
//「以上と超える」、「以下と未満」大小の比較
$age = 20;

//超える / 未満
var_dump($age > 20); //超える(20を含まない) false
var_dump($age < 20); //未満(20を含まない) false

//以上 / 以下
var_dump($age >= 20); //以上(20を含む) true
var_dump($age <= 20); //以下(20を含む) true