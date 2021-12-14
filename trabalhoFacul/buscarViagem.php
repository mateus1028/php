<?php
require_once 'classes/Empresa.class.php';
$obj = new Empresa();
$obj->setTabela("pacotes");
$dados = $obj->consultar();

?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Buscar viagem</title>
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
							<td><?= $dados[$i]['empresa'] 	?></td>				
							<td><?= $dados[$i]['telefone'] 	?></td>	
							<td><?= $dados[$i]['cidade'] 	?></td>	
							<td><?= $dados[$i]['hotel'] 	?></td>	
							<td><?= $dados[$i]['dias'] 		?></td>	
							<td><?= $dados[$i]['preco'] 	?></td>	
						</tr>
					</tbody>
				</table>  

			</div>
		</form>	
		<?php } ?>	
	
	</body>
</html>