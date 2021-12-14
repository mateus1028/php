	<html>
		<meta charset="UTF-8">
		<head>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
			<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<title>Boa Viagem</title>
		</head>
		<body background="img1.jpg">
          
		  <nav class="blue lighten-3">
		 		<div class="nav-wrapper">
			   		<ul id="nav-mobile" class="right hide-on-med-and-down">
				 		<li><a href="siteCliente.php">Cliente</a></li>
						<li><a href="login.php">Empresas</a></li>
					
			    	</ul>	
		   		</div>	
			</nav>
			

			<div class="slider">
				<ul class="slides">
					<li>
						<img src="imagens/veneza.jpg"> <!-- random image -->
						<div class="caption center-align">
							
							<h3>Aqui você encontra os melhores pacotes de viagem</h3>
							<h5 class="light grey-text text-lighten-3">Compre já!</h5>
							
						</div>
					</li>
					<li>
						<img src="imagens/aviao.jpg"> 
						<div class="caption left-align">
							<h3>Cadastre suas viagem </h3>
							<h5 class="light grey-text text-lighten-3">Sem custo nenhum!</h5>
							
						</div>
					</li>
					
				</ul>	
				<br>
				<br>
				<div class="row">
			<div class="col s6">
				<h2 align="center" class="header"></h2>
				<div class="card horizontal">
					<div class="card-image">
						<img src="imagens/empresa.jpg" width="250" height="200">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p><b>Você tem uma empresa de viagens?</p></b>
							<p>Aqui você pode anunciar seus pacotes totalmente de graça</p>
						</div>
					
					</div>
				</div>
			</div>
			
			
			<div class="col s6">
				<h2 class="header"></h2>
				<div class="card horizontal">
					<div class="card-image">
						<img src="imagens/familia.jpg" width="250" height="200">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p><b>Você que está afim de viajar</p></b>
							<p>Encontre o melhor pacote de viagem aqui, várias empresas anuncia seus pacotes aqui</p>
						</div>
						
					</div>
				</div>
			</div>
			</div>
			
			<!--Import jQuery before materialize.js-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>	
			<script>
			$('.slider').slider({full_width: true});
			</script>
		
            
		</body>
	</html>  