<?php
$opts = array(
'http'=>array(
'method'=>"GET",
'header'=>"Referer: https://www.ntv.ru/air/ntv" .
      "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:51.0) Gecko/20100101 Firefox/51.0"
));
$context = stream_context_create($opts);
$url = "http://cdn.ntv.ru/ntv1/tracks-v1a1/mono.m3u8";
$data = file_get_contents($url, false, $context);

//var_dump($data);
header("Location: $data");
?>
