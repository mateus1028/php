
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body background="imagens/nuvem.jpg">
		<form  method="POST" action="metodos.php">
			<div class="login">
				<input type="text" 		placeholder="Informe seu email" name="email" id="email">  
				<input type="password"  placeholder="Informe sua senha" name="senha" id="senha"> 
				<br>		
				<input type="submit" name="logar" value="logar">
				<input type="submit" name="cadastrarConta" value="Cadastrar">
			</div>
			<div class="shadow"></div>
		</form>
	<body>
</html>