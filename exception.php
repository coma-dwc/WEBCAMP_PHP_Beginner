<?php
//例外処理
//try{}内で発生した例外は、catchでキャッチできる
//例外はSplFileObject()というクラスを使って発生させる

try {
  //例外を発生させる
  $obj = new SplFileObject('dummy');

  //そのあとの処理（動かないことを確認するため）
  echo "例外が起きた後の処理。ここは通る? \n";
} catch(\Throwable $e) {
  //
  echo "例外が発生したらここを通る。 \n";
  var_dump($e->getMessage());
}
//
echo "fin. \n";