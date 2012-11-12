<?php

/* ライブラリ読み込み */
require "./lib/post_request.php";

/* post_requestの実行例 */
$url = "http://example.com/";
$data = array(
	"param1" => "data1",
	"param2" => "data2"
);
echo post_request($url, $data);

?>