<?php
#ビット単位の演算(ビット演算子)
//乱数で値の用意
$i = random_int(0, 255);
$j = random_int(0, 255);


//AND
$k = $i & $j;
printf("%x & %x = %x \n", $i, $j, $k);

//OR
$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);

//XOR
$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);

//NOT
$k = ~$i;
printf("~%x = %x \n", $i, $k);