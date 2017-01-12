<?php
$access_token = 'ps1RWBVyom4rWF4KmsxL0wWX3TfzJAIsymLhJWuwGQUh9O6RhwpCskfYQ7RmEmAukLS6g/NcXAxTxJQNQk24ju4McImtek0LPKtipc5VSUElYBfFwg225FRPQ8XU2oQFsJrSLbtSYOVoORn+W2AW8QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
