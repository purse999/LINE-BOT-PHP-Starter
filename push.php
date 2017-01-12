<?php
$access_token = 'qcK6VUxIi13MOHbAhXh5IF+1QAszI95wkVlMfpI9rnDRfKvQVbC5WwQp/a38qK4/aRabEiuL2MaF9gmpRo3QW+9yT9rdheE3UK1PTKw8tWZw4ULUGLIGsNy51vbzdG75jin7QYUyUJPBmmrdS1DRUQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/bot/message/push';
$data = [
		'to' => 'U97dd5de82024c6e2bca31561df3c7aee',
		'messages' => ['Hello'],
	];
$post = json_encode($data);
$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
