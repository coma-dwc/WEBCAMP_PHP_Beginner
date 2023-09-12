<?php
//
// var_dump($_GET);

/*
//データの取得
$input = $_GET['input_text'];

//出力
echo "あなたが入力したのは" , htmlspecialchars($input, ENT_QUOTES) , "ですね";
//このように、htmlspecialchars()関数を第二引数まで明示して適切に使えば、XSSを防ぐことができる(必須且つ鉄則！)
*/

//h()関数の定義：(※htmlspecialchars()関数を短くしたもの)
/*
function h(string $s) : string
{
  return htmlspecialchars($s, ENT_QUOTES);
}

//データの取得
$input = $_GET['input_text'];

//出力
echo "あなたが入力したのは", h($input), "ですね";
*/


//null合体演算子
//URLを操作して直接form.phpを呼び出す
//↓エラーを表示させる

error_reporting(-1);
ini_set('display_errors', 'on');

// h()関数の定義
function h(string $s) : string
{
    return htmlspecialchars($s, ENT_QUOTES);
}

// データの取得
// $input = $_GET['input_text']; // 追記分
$input = $_GET['input_text'] ?? ""; // 今回追記分

// 出力
echo "あなたが入力したのは " , h($input) , " ですね";