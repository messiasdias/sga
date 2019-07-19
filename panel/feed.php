<?php

$url = isset($_GET['url']) ? $_GET['url'] : '';

if (filter_var($url, FILTER_VALIDATE_URL) === false || strtolower(substr($url, 0, 4)) !== 'http') {
    echo("URL inválida: $url");
    exit();
} 

$proxy = null; // "http://192.168.0.10:3128"

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec ($ch);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);
$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

$charset = substr($content_type, strpos($content_type, 'charset='));
$default_charset = 'charset=UTF-8';

if (!empty($charset) && strcasecmp($charset, $default_charset) !== 0) {
    $body = utf8_encode($body);
}

header('Content-type: text/xml; charset=UTF-8');
header("Access-Control-Allow-Origin: *");
echo $body;

