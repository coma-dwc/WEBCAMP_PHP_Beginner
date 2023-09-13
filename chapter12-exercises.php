<?php
#chapter12：演習問題
//問１：以下のメソッドを持つクラスを作成
//・クラス名は、MyTest
//・メソッドと処理は、以下のとおり
//・add($i, $j): 2つの引数の和（足し算）をreturnする
//・sub($i, $j): 2つの引数の差（引き算）をreturnする

class MyTest
{
    //
    public function add($i, $j)
    {
        return $i + $j;
    }

    //
    public function sub($i, $j)
    {
        return $i - $j;
    }
}

//問２：以下のメソッドとプロパティを持つクラスを作成
//・クラス名は、MyTest2
//・プロパティは、次のとおり => price    name
//・プロパティのアクセサ（setterとgetter）

class MyTest2
{
    private $price;
    private $name;

    //
    public function setPrice($i)
    {
        $this->price = $i;
    }
    public function getPrice()
    {
        return $this->price;
    }

    //
    public function setName($s)
    {
        $this->name = $s;
    }
    public function getName()
    {
        return $this->name;
    }
}