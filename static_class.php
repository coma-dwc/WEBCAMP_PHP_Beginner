<?php
//静的メソッド
//
class Hoge
{
  //
  private static $静的プロパティ;

  //
  public static function 静的なメソッド()
  {
    echo "静的なメソッド \n";
  }

  //
  public static function set静的プロパティ($v)
  {
    static::$静的プロパティ = $v;
  }
  //
  public static function get静的プロパティ()
  {
    return static::$静的プロパティ;
  }
}
//
Hoge::静的なメソッド();
//
Hoge::set静的プロパティ("set string");
echo Hoge::get静的プロパティ(), "\n";