<?php

session_start();
	if(!isset($_SESSION['fezlogin'])){
		header("location: login.php");
	}
	else {

		require_once 'classes/Empresa.class.php';
		$obj = new Empresa();
		$obj->setTabela("pacotes");
		$dados = $obj->consultar();
	
	}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Alterar viagem</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	</head>
	<body background color="blue">
		<?php for($i=0;$i<count($dados);$i++){ ?>
		<form  method="POST" action="metodos.php">
			<div class="container">
				<table>
					<thead>
						<tr>
							
							<th>Empresa</th>
							<th>Telefone</th>
							<th>Cidade</th>
							<th>Hotel</th>
							<th>Dias</th>
							<th>Preço</th>
							<input type="hidden" name="idPacote" value="<?= $dados[$i]['idPacote'] ?>">
						</tr>
					</thead>
					<tbody>
						<tr>
							
							<td><input type="text" name="empresa" 	value="<?= $dados[$i]['empresa'] 	?>"></td>				
							<td><input type="text" name="telefone" 	value="<?= $dados[$i]['telefone'] 	?>"></td>	
							<td><input type="text" name="cidade" 	value="<?= $dados[$i]['cidade'] 	?>"></td>	
							<td><input type="text" name="hotel" 	value="<?= $dados[$i]['hotel'] 		?>"></td>	
							<td><input type="text" name="dias" 		value="<?= $dados[$i]['dias'] 		?>"></td>	
							<td><input type="text" name="preco" 	value="<?= $dados[$i]['preco'] 		?>"></td>	
						</tr>
					</tbody>
				</table>  
				<input type="submit" name="alterar" value="alterar">
				<input type="submit" name="excluir" value="excluir">

			</div>
		</form>	
		<?php } ?>	
	
	</body>
</html>