<?php
#chapter9 演習問題
//問１：引数を2つ受け取り、以下の挙動をする関数「myFuncStringAdd()」を作成
//・2つの引数はそれぞれ文字列(string)とする
//・戻り値は文字列(string)とする
//・2つの引数を文字列結合した結果を戻り値とする

function myFuncStringAdd(string $s1, string $s2) : string
{
    //
    $ret = "{$s1}{$s2}";

    //
    return $ret;
}
//
echo myFuncStringAdd("make", " function");
