<?php
	session_unset();
	session_destroy(); //destruindo session data	
	session_start();   //sempre em primeiro, ela disponibiliza todos os recurso da session

	
	$login = $_POST["nome"];
	$senha = $_POST["senha"];
	$valido = true;
	
	
	// depois vai checar se o usuário existe ou não
	// apos fazer a checagem e ser valido
	
	if ($valido){
		
		$_SESSION["fezlogin"] 	= true;     // uma posição no array so pra ve se a pessoa fez ou não o login
		$_SESSION["login"]    	= $login;
		$_SESSION["identif"]  	= session_id();
		$_SESSION["ultimaAtiv"] = time();
		header("location: menusessao.php");
		
	}
	else {

		header("location: login.html");
	}
	
	
	
	
	
?>