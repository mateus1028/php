<?php
	session_start();
	if(!isset($_SESSION['fezlogin'])){
		header("location: login.php");
	}
	require_once 'classes/Empresa.class.php';
	$obj = new Empresa();
	$obj->setTabela("sessions");
	$dados = $obj->consultar();	
	
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Sessions</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
	</head>
	<body background color="blue">
	<h4><center>Sessions que foram logadas</center></h4>
	
		<?php for($i=0;$i<count($dados);$i++){ ?>
		<form  method="POST" action="metodos.php">
		
			<div class="container">
			
				<table>
					<thead>
						<tr>
							
							<th>ID Session</th>
							<th>Session</th>
							<th>Dia</th>
							<th>Hora</th>
							
							<th>ID Empresa</th>
							<input type="hidden" name="idSession" value="<?= $dados[$i]['idSession'] ?>">
						</tr>
					</thead>
					<tbody>
						<tr>	
							<td><?= $dados[$i]['idSession']?></td>	
							<td><?= $dados[$i]['sessions'] ?></td>	
							<td><?= $dados[$i]['dia'] ?></td>	
							<td><?= $dados[$i]['hora'] ?></td>	
							<td><?= $dados[$i]['idEmpresa'] ?></td>							
							
						</tr>
					</tbody>
				</table>  
				
			</div>
		</form>	
		<?php } ?>	
		
	
	</body>
</html>