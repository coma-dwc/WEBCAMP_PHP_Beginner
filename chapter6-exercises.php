<?php
//問１：変数 $i に123を代入します。その後、以下の処理のコードを書きなさい。
//・変数 $i が100以下ならば「100以下」と表示
//・変数 $i が上記以外ならば「100を超える」と表示

$i = 123;

if($i <= 100) {
  echo "100以下 \n";
} else {
  echo "100を超える \n";
}


//問２：変数 $i に123を代入します。その後、以下の処理のコードを書きなさい。
//・変数 $i が50未満ならば「50未満」と表示
//・上記条件は満たさないが、変数 $i が100未満ならば「100未満」と表示
//・上記条件は満たさないが、変数 $i が150未満ならば「150未満」と表示
//・変数 $i が上記以外ならば「150以上」と表示

$i = 123;

if($i < 50) {
  echo "50未満 \n";
} else if ($i < 100) {
  echo "100未満 \n";
} else if ($i < 150) {
  echo "150未満 \n";
} else {
  echo "150以上 \n";
}