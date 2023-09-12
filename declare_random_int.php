<?php
//declare(strict_types=1)
declare(strict_types=1); //この1行を追加 厳格な型 モード =>「暗黙の型変換を行わずにエラーを出す」ようになる
//
$i = random_int('1', '999');
echo "{$i} \n";