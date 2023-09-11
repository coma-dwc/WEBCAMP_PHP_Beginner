<?php
//do-whileについて

//
while(false) {                  //whileは()の式がfalseの場合は「中のブロック({}内) を1度も実行しない」という動き
  echo "while ここは動く? \n";
}

//
do {                              //do-whileは「まずは1回実行。結果次第で2回目も実行するかもしれないし、1回しか実行しないかもしれない」という処理がたまにある
  echo "do-while ここは動く? \n"; //これが表示される
} while(false);