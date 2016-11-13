<?php

$login = 'usumobdesenv';
$password = 'passdesenv123';
$loginAppp = '45.922.746/0001-90';
$passwordApp = '123456';

$loginUrl = 'http://usve79048.serverprofi24.com/eiss/webservice/ws_dadoslogin.php';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $loginUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'login='.$login.'&senha='.$password.'&loginApp='.$loginAppp.'&senhaApp='.$passwordApp);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$content = curl_exec($ch);

curl_close($ch);

echo $content;

?>