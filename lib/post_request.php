<?php
function post_request ($url, $data) {
	/* POSTデータをquery用に整形 */
	$data = http_build_query($data, "", "&");

	/* headerを設定 */
	$header = array(
		"Content-Type: application/x-www-form-urlencoded",
		"Content-Length: ".strlen($data)
	);

	/* ぜんぶHTTPリクエスト用に組み合わせる */
	$context = array("http" => array(
		"method"  => "POST",
		"header"  => implode("\r\n", $header),
		"content" => $data
	));

	/* リクエストを実行して結果を返す */
	return file_get_contents($url, false, stream_context_create($context));
}
?>