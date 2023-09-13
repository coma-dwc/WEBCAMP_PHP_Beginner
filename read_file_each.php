<?php
//ファイルの読み込み
//マジック定数を使って、「自分自身を読む」コードを書く
//「1行ずつの読み込みに適した書き方」

//ファイル名の把握
$file_name = __FILE__;

//ファイルのopen
$file_obj = new SplFileObject($file_name);

//各行を読み込んで出力する
foreach($file_obj as $no => $line) {
  echo "{$no}: $line";
}