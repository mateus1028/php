<?php
	$cookieNome  	= "unisale";
	$cookieValor 	= "Teste de cookie";
	$qtdeDias     	= 1;
	$cookieSegundos = $qtdeDias * 24 * 60 * 60;

	if (!isset($_COOKIE["unisale"])) {
		// define o tempo como o tempo atual + ( qtd dias em segundos )
		// se null o cookie não expira
		setcookie($cookieNome, $cookieValor, time() + $cookieSegundos);
	}else{
		echo"Já existe. <br>";
		$cookieValor = $_COOKIE["unisale"];
	}	
	
	echo "Nome cookie: $cookieNome<br>";
	echo "O Conteudo é: $cookieValor";
?> 