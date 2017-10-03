<? 

$ip = $_SERVER["REMOTE_ADDR"]; 

$name = 'arquivo.txt';
$file = fopen($name, 'a');
fwrite($file, $ip);
fclose($file);

?>