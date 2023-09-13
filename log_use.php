<?php
//名前空間を持つクラスの利用

// ファイルの読み込み
require_once( __DIR__ . "/WEBCAMP_Log.php" );

// 「名前空間付き」のクラスを使う（完全修飾名）
$obj = new \WEBCAMP\Log();  //「\名前空間名\クラス名」が、一応「基本的な書き方」・このように「\」で始まる修飾名を「完全修飾名」と言う
$obj->test();