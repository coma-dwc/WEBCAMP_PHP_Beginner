<?php
//インタフェース
//
interface インタフェースA
{
  public function メソッドA();
}
//
interface インタフェースB
{
  public function メソッドB(int $i);
}

//
class Hoge implements インタフェースA, インタフェースB
{
  //
  public function メソッドA()
  {
    echo "メソッドA \n";
  }

  //
  public function メソッドB(int $i)
  {
    echo "メソッドB {$i} \n";
  }
}

//
$obj = new Hoge();
var_dump($obj);
$obj->メソッドA();
$obj->メソッドB(999);