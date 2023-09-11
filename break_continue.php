<?php
//breakとcontinue(break：ループは途中で終了させる動き  continue：ループの残り処理をスキップして"次"に進む動き)

//continueの確認
echo "\n continueの確認 \n";
for($i = 0; $i < 10; ++$i) {
  echo "{$i} は奇数かな? \n";
  if ( ($i % 2) === 1 ) {
    //奇数なのでcontinueする(以降の処理をスキップする)
    continue;
  }
  //「continue」を通らなければこの処理が動く
  echo "偶数でした！ \n";
}


//breakの確認
echo "\n breakの確認 \n";
$i = 0;
while($i < 10) {
  echo "{$i} \n";
  //
  if ($i >= 5) {
    //ループを抜ける
    echo "{$i}なのでループを抜けます\n";
    break;
  }
  //
  ++$i;
}