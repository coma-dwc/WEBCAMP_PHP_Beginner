<?php
//基本のif文
//
if (true) {
  echo "true だとここを通る? \n"; //結果：true
}
//
if (false) {
  echo "false だとここを通る? \n";
}

//
$age = 20;
if ($age >= 20) {
  echo "成人です \n"; //結果：成人です(true)
}
if ($age < 20) {
  echo "未成年です \n";
}


//if-else文
//elseで書き換え
if ($age >= 20) {
  echo "成人です \n"; //結果：成人です(true)
} else {
  echo "未成年です \n";
}


//if-elseif-else文
// elseif付き
if ($age > 20) {
    echo "成人 \n";
} else if($age === 20) {
    echo "新成人おめでとう！！ \n"; //結果：新成人おめでとう！！
} else {
    echo "未成年 \n";
}