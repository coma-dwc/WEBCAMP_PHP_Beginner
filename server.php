<?php
//$_SERVER (スーパーグローバル変数のひとつ)

//
function h(string $s) : string
{
  return htmlspecialchars($s, ENT_QUOTES);
}

//
echo "ブラウザ(User Agent)は ", h($_SERVER['HTTP_USER_AGENT']), "です。<br> \n";
// echo "接続元IPは", h($_SERVER['REMOTE_ADDR']), "です。<br> \n";
// echo "本当の接続元IPは", h($_SERVER['HTTP_X_FORWARDED_FOR']), "です。<br> \n";

//接続元IPアドレスの取得
$from_ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '';
echo "接続元IPは", h($from_ip), "です。<br> \n";

//この書き方だとHTTP_X_FORWARDED_FORが未設定の場合でもエラーを出さずに動かすことが出来る