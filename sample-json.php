<?php

/* 元データ */
$data = array(
	"name" => "sasyugo",
	"member" => array("fnobi", "soramber", "yk5han")
);
/* ※配列はいちいちarray書かなくちゃいけないのが、PHPのめんどくさいところ */


/* json_encodeで連想配列をjsonにする */
$json = json_encode($data);
echo $json . "\n";


/* jsonを再び連想配列に戻す */
$data2 = json_decode($json, true);
echo $data2["member"][0] . "\n";


/* json_decodeの第2 引数は、decodeの方法。
   trueを入れると連想配列として、
   falseを入れると、objectとしてdecodeする。 */


/* こんどはオブジェクトとしてdecodeしてみます */
$data3 = json_decode($json, false);
echo $data3->member[0] . "\n";
/* ※objectのメンバには、アロー演算子でアクセス */


?>