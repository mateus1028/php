<?php
	session_start();

	if (empty($_REQUEST["uri_path"])) {
		echo "<h2>Recurso Inexistente</h2>";
		exit;
	}
	
	$_REQUEST["uri_path"]
	/*$recebido = $_REQUEST["uri_path"];
	echo "Recebi: $recebido";*/

	$dados = $_REQUEST["uri_path"];
	$_SESSION["dados"] = $dados;

	$parte = explode("/", $dados);

	$rotas = array(
		'/' 		=> "pg/index.php",
		'cep' 		=> "pg/cep.php",
		'oi' 		=> "pg/falaoi.php",
		'admin' 	=> "pg/admin/home.php",
		'perfil' 	=> "pg/perf/perfil.php"
	);

	$paginaAtual = empty($rotas[$parte[0]]) ? null : $rotas[$parte[0]];

	if ($paginaAtual) {
		require_once($paginaAtual);
	}else{
		require_once('error/404.php');
	}
?>