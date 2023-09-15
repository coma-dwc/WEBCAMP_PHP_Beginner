<?php
//自己採点課題：FizzBuzzの結果をファイルに書く
//以下の出力は、echoではなく、ファイル名FizzBuzzFile.txtに出力
//1から100までの数字を出力
//ただし、数字が「3で割り切れる」ときは、数字の代わりにFizzと出力
//ただし、数字が「5で割り切れる」ときは、数字の代わりにBuzzと出力
//ただし、数字が「3でも5でも割り切れる」ときは、数字の代わりにFizzBuzzと出力

$file_name = "./FizzBuzzFile.txt";

for($i = 1; $i <= 100; ++$i) {
  if( ($i % 15) === 0) {
    //3でも5でも割り切れる場合 FizzBuzzと出力
    file_put_contents($file_name, "FizzBuzz \n", FILE_APPEND | LOCK_EX);
  } else if( ($i % 5) === 0) {
    //5で割り切れる場合 Buzzと出力
    file_put_contents($file_name, "Buzz \n", FILE_APPEND | LOCK_EX);
  } else if( ($i % 3) === 0) {
    //3で割り切れる場合 Fizzと出力
    file_put_contents($file_name, "Fizz \n", FILE_APPEND | LOCK_EX);
  } else {
    //1から100までの数字を出力
    file_put_contents($file_name, "{$i} \n", FILE_APPEND | LOCK_EX);
  }
}