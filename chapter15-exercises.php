<?php
#chapter15：演習問題
//問１：以下の処理をするコードを書く
//・自分自身のファイルのすべての文字列を読み込む
//・file_copy.phpファイルに、読み込んだ文字列を書き込む

// ファイルの読み込み
$self_file_string = file_get_contnents( __FILE__ );

// ファイルの書き込み
file_put_contents("./file_copy.php", $self_file_string);