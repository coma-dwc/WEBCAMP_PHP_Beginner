<?php
//requireについて
// アンダースコアは2つずつ付ける
var_dump( __DIR__ ); //__DIR__ ではファイルの存在するディレクトリが設定されている ※require_onnce()の時などに使うことが多い
var_dump( __FILE__ ); //__FILE__ ではファイルのフルパスとファイル名が設定されている

//ファイルの読み込み
require_once( __DIR__ . "/static_class.php" );