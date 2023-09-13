<?php
//「追加書き」のコード

//ファイル名の把握
$file_name = __DIR__ . "/file_write_append.txt";

//ファイルに書き込む内容
$write_string = "書き込む内容 \n";

//ファイルに書き込む
file_put_contents($file_name, $write_string, FILE_APPEND | LOCK_EX);


//このコードを複数回動かすと、出力されるファイルの行が増えていく=「追加書き」
//追加書きでは、ファイルの既存内容はそのまま保持し、「その後ろに追加で」書き込む