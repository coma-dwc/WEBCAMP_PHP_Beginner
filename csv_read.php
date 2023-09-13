<?php
//CSVファイルの読み込み
//読み込むときは、setFlags() メソッドで SplFileObject::READ_CSV を設定すると、
//あとは「普通のファイルを読み込む」場合と同じようにforeachを使って CSVファイルを読み込めるようになる

//読み込むファイル名の把握
$file_name = __DIR__ . "/data.csv";

//ファイルのopen
$file_obj = new SplFileObject($file_name);

//ファイルをCSVとして読み込む
$file_obj->setFlags( SplFileObject::READ_CSV );

//
foreach($file_obj as $no => $datum) {
  //1レコード分を出力
  var_dump($datum);
}