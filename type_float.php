<?php
#floatは「小数」を扱う型

//少数の確認
$f = 3.14;
var_dump($f);

#小数のときは、intではなくfloatと表示される。正確には「浮動小数点数型」や「実数型」と言う。

//ゼロ除算の確認
$f = 10 / 0;
//PHP Warning:  Division by zero と表示されてしまう
//このため、割り算を書くときは「割る側の数が0でないこと」を確認しておくとよい