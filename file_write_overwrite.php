<?php
//上書きと追加書き
//ファイルへ書き込むには「file_put_contents()関数」が便利

// ファイル名の把握
$file_name = __DIR__ . "/file_write_overwrite.txt";

// ファイルに書き込む内容
$write_string = "書き込む内容 \n";

// ファイルに書き込む
file_put_contents($file_name, $write_string);


//ファイルに書き込魔出ている内容を確認（ターミナルで操作）
//sコマンドは（すでに使ってますが）「ファイルの一覧を表示する」コマンド：(ls -l ./file_write_overwrite.txt)
//catコマンドは「ファイルの中身を出力する」コマンド：(cat ./file_write_overwrite.txt)