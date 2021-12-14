<?php
	session_start();
	require_once("../classes/Empresa.class.php");

	$banco = new Empresa();

	$util = new Util();
	$util->importarVariaveis($_GET);
	$util->importarVariaveis($_POST);
	$banco->setTabela("sesssions JOIN empresa ON (idEmpresa = idSession)");
	$dados = $banco->buscaSessao();

	$json = json_encode($dados);
	header('Content-Type: application/json');
	echo $json;
?>