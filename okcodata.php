<?php 

$url = "http://chainz.cryptoid.info/ok/api.dws?q=totalcoins";
$json1 = json_decode(file_get_contents($url), true);
$totalcoins = $json1;

$fp = fopen('stats/totalcoins.txt', 'w') or die("can't open file");
fwrite($fp, $totalcoins);
fclose($fp);

$url2 = "http://chainz.cryptoid.info/ok/api.dws?q=addresses";
$json2 = json_decode(file_get_contents($url2), true);
$totady = $json2["known"];

$fp = fopen('stats/totady.txt', 'w') or die("can't open file");
fwrite($fp, $totady);
fclose($fp);

$url3 = "http://chainz.cryptoid.info/ok/api.dws?q=addresses";
$json3 = json_decode(file_get_contents($url3), true);
$nonady = $json3["nonzero"];

$fp = fopen('stats/nonady.txt', 'w') or die("can't open file");
fwrite($fp, $nonady);
fclose($fp);

$url4 = "https://api.coincap.io/v2/assets/okcash";
$json4 = json_decode(file_get_contents($url4), true);
$marketplace = $json4["data"]["rank"];

$fp = fopen('stats/marketplace.txt', 'w') or die("can't open file");
fwrite($fp, $marketplace);
fclose($fp);

$urlok221 = "http://chainz.cryptoid.info/ok/api.dws?q=ticker.usd";
$pricecoin = json_decode(file_get_contents($urlok221), true);

$marketcap = $totalcoins * $pricecoin;

$fp = fopen('stats/marketcap.txt', 'w') or die("can't open file");
fwrite($fp, $marketcap);
fclose($fp);

?>