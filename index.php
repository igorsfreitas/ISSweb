<?php


$loginAppp = '45.922.746/0001-90';
$passwordApp = '123456';

//TESTE DE RETORNO
//echo loginAplicacao($loginAppp, $passwordApp);

function loginAplicacao($loginAppp, $passwordApp)
{

		$login = 'usumobdesenv';
		$password = 'passdesenv123';
		
		$loginUrl = 'http://usve79048.serverprofi24.com/eiss/webservice/ws_dadoslogin.php';

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $loginUrl);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'login='.$login.'&senha='.$password.'&loginApp='.$loginAppp.'&senhaApp='.$passwordApp);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$content = curl_exec($ch);

		curl_close($ch);

		return $content;
}

$periodo = '2016-02';

function listarNotasGeradas($loginAppp, $passwordApp, $periodo)
{

		$login = 'usumobdesenv';
		$password = 'passdesenv123';
		
		//ESTA URL NÃO ESTÁ DISPONÍVEL
		$loginUrl = 'http://usve49032.serverprofi24.com/eiss/webservice/ws_buscatomador.php';

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $loginUrl);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'login='.$login.'&senha='.$password.'&loginApp='.$loginAppp.'&senhaApp='
			.$passwordApp .'&periodo='.$periodo);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$content = curl_exec($ch);

		curl_close($ch);

		return $content;

}
?>