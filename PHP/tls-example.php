<?php

$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, "https://tls12.pagar.me/");
curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/ca-certificates.crt');

curl_setopt($ch, CURLOPT_SSLVERSION, 6);

curl_exec($ch);
echo "\n";

if ($err = curl_error($ch)) {
	var_dump($err);
	echo "DEBUG INFORMATION:\n###########\n";
	echo "CURL VERSION:\n";
	echo json_encode(curl_version(), JSON_PRETTY_PRINT);
}
