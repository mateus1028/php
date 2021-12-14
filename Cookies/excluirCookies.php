<?php
	$cookieNome  	= "unisale";
	$cookieValor 	= "Teste de cookie";
	$qtdeDias     	= 1;
	$cookieSegundos = $qtdeDias * 24 * 60 * 60;

	echo "Cookie existente: " . $_COOKIE["unisale"] . "<br>";

	if (isset($_COOKIE["unisale"])) {
		//unset($_COOKIE["unisale"]);
		setcookie($cookieNome, $cookieValor, time()-1);
		echo "Cookie destruido";
	}
?>