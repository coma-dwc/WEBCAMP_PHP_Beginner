<?php
//自己採点課題：FizzBuzzを関数で書く
//関数FizzBuzz(int $max)を作成 使用は以下の通り
//引数はint型の$maxが1つある
//1から$maxまでの数字を出力
//・ただし、数字が「3で割り切れる」ときは、数字の代わりにFizzと出力
//・ただし、数字が「5で割り切れる」ときは、数字の代わりにBuzzと出力
//・ただし、数字が「3でも5でも割り切れる」ときは、数字の代わりにFizzBuzzと出力
//テストするために fizzBuzz(50); //関数を呼び出す  ←このコードをプログラムの最後に追加すること


//関数の作成
function FizzBuzz(int $max)
{

  for($i = 1; $i <= $max; ++$i) {
    $s = "";

    //3で割り切れるとき、Fizzと出力
    if( ($i % 3) === 0) {
      $s = "Fizz";
    }
    //5で割り切れるとき、Buzzと出力
    if( ($i % 5) === 0) {
      $s = $s . "Buzz";
    }
    //3でも5でも割り切れない場合、1から100までの数字を出力
    if($s === "") {
      $s ="{$i}";
    }
    echo "{$s} \n";
  }
  echo "\n";
}

FizzBuzz(50); //関数を呼び出す