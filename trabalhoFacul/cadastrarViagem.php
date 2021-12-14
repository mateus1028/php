<?php
session_start();
	if(!isset($_SESSION['fezlogin'])){
		header("location: login.php");
	}
	
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/Viagem.css">
		<meta charset="utf-8">
		<title>Cadastrar Pacotes</title>
	</head>
	<body>
		<form  method="POST" action="metodos.php">
			<div class="login">
				<input type="text" 		placeholder="Nome da empresa" 			  name="empresa"  id="empresa">  
				<input type="text"  	placeholder="Telefone de contato" 		  name="telefone" id="telefone"> 
				<input type="text" 		placeholder="Nome da cidade" 		  	  name="cidade"   id="cidade"> 	
				<input type="text" 		placeholder="Nome do hotel" 		  	  name="hotel"    id="hotel"> 
				<input type="text" 		placeholder="Quantidade de dias" 		  name="dias"     id="dias"> 
				<input type="text" 		placeholder="Preço total" 		  		  name="preco"    id="preco"> 				
				<input type="submit" name="cadastrarViagem" value="Cadastrar">
			</div>
			<div class="shadow"></div>
		</form>
	<body>
</html>