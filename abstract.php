<?php
//抽象化
//
abstract class 抽象クラス
{
  //
  abstract public function 抽象メソッド();
  //
  public function 普通のメソッド()
  {
    echo "普通のメソッド \n";
  }
}

//
class 子クラス extends 抽象クラス
{
  //
  public function 抽象メソッド()
  {
    echo "子クラスで実装した抽象のメソッド \n";
  }
}
//
//$obj = new 抽象クラス(); //XXX これは出来ないので、コメントアウトを外すとエラーになる

//
$obj = new 子クラス();
$obj->普通のメソッド();
$obj->抽象メソッド();