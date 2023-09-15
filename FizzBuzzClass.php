<?php
//自己採点課題：FizzBuzzをクラスで書く
//class FizzBuzzを作成 仕様は以下の通り
//・プロパティとしてint$maxを作成
//・プロパティのsetterを作成

//・メソッドexec()を作成 仕様は以下の通り
///・1からプロパティ$maxまでの数字を出力
///・ただし数字が「3で割り切れる」ときは、数字の代わりにFizzと出力
///・ただし数字が「5で割り切れる」ときは、数字の代わりにBuzzと出力
///・ただし数字が「3でも5でも割り切れる」ときは、数字の代わりにFizzBuzzと出力

//・テストするために以下のコードをプログラムの最後に追加すること
// $obj = new FizzBuzz();
// $obj->setMax(50);
// $obj->exec();

class FizzBuzz
{
    //
    private int $max;

    //
    public function setMax($i)
    {
        $this->max = $i;
    }

    public function exec()
    {
        //
        for($i = 1; $i <= $this->max; ++$i) {
            //
            $s = "";

            //3で割り切れるときは、Fizzと出力
            if ( ($i % 3) === 0 ) {
                $s = "Fizz";
            }
            //5で割り切れるときは、Buzzと出
            if ( ($i % 5) === 0 ) {
                $s = $s . "Buzz";
            }
            // 3でも5でも割り切れなかったら「1から100までの数字を出力してください」
            if ($s === "") {
                $s = "{$i} ";
            }
            //
            echo "{$s} \n";
        }
        echo "\n";
    }
}


//
$obj = new FizzBuzz();
$obj->setMax(50);
$obj->exec();