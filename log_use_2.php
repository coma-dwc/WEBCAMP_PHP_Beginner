<?php
//useキーワードを使ってにもう少しシンプルに書く(完全修飾名は長い)

//ファイルの読み込み
require_once( __DIR__ . "/WEBCAMP_Log.php" );
//
use WEBCAMP\Log;

//「名前空間付き」のクラスを使う（非修飾名）
$obj = new Log();
$obj->test();