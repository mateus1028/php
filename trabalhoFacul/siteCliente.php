	<html>
		<meta charset="UTF-8">
		<head>
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
			<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/
			<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<title>Boa viagem</title>
		</head>
		<body background="img1.jpg">
          
			<nav class="blue lighten-3">
		 		<div class="nav-wrapper">
			   		<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="buscarViagem.php">Buscar Viagens</a></li>
						<li><a href="sair.php">Sair</a></li>
			    	</ul>	
		   		</div>	
			</nav>

			<div class="slider">
				<ul class="slides">
					<li>
						<img src="imagens/irlanda.jpg"> <!-- random image -->
						<div class="caption center-align">
							<h3>Conheça o mar da Irlanda<h3>
							<h5 class="light grey-text text-lighten-3"> </h5>
						</div>
					</li>
					<li>
						<img src="imagens/xd.jpg"> 
						<div class="caption left-align">
							<h3>Está com vontade de ir a praia?</h3>
							<h5 class="light grey-text text-lighten-3">Compre já o seu pacote e conheça inúmeras praias!</h5>
						</div>
					</li>
					<li>
						<img src="imagens/veneza.jpg"> 
						<div class="caption right-align">
							<h3>Conheça Veneza na Itália </h3>
							<h5 class="light grey-text text-lighten-3">Viaje com sua família e aproveite!</h5>
						</div>
					</li>
				</ul>	
			<div class="blue lighten-3">	
				<div class="section">

					<div class="row">
						<div class="col s12 m4">
							<div class="icon-block">
								<h2 class="center light-blue-text"><i class="material-icons"><img src="https://cdn2.momondo.net/a-8/assets/images/icons/ic-awardwinner-ml.svg"></i></h2>
								<h4 class="center white-text">Premiado</h4>
								<p class="light white-text" align="justify"> A Boa Viagem já ganhou inúmeros prémios para melhor site de cadastro de viagem e é recomendada não só por quem viaja frequentemente como também pela CNN, o New York Times e o Daily Telegraph..</p>
							</div>
						</div>

						<div class="col s12 m4">
							<div class="icon-block">
								<h2 class="center light-blue-text"><i class="material-icons"><img src="https://cdn2.momondo.net/a-8/assets/images/icons/ic-independent-ml.svg"></i></h2>
								<h4 class="center white-text">Prestigiado</h4>
								<p class="light white-text" align="justify">Pesquisamos em companhias aéreas, sites de viagens e companhias low cost, encontramos os melhores bilhetes de avião e levamos-te gratuitamente até quem os tiver disponíveis.</p>
							</div>
						</div>

						<div class="col s12 m4">
							<div class="icon-block">
								<h2 class="center light-blue-text"><i class="material-icons"><img src="https://cdn2.momondo.net/a-8/assets/images/icons/ic-smiley-happy-ml.svg"></i></h2>
								<h4 class="center white-text">O Melhor e mais barato</h4>
								<p class="light white-text" align="justify">Com apenas um clique consegues ver qual as viagem mais baratas, mais rápido ou melhor em termos de qualidade/preço.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
        
			<div class="row">
			<div class="col s6">
				<h2 align="center" class="header"></h2>
				<div class="card horizontal">
					<div class="card-image">
						<img src="imagens/salvador.jpg" width="250" height="200">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p><b>Conheça os pontos turisticos de Salvador</p></b>
							<p>Aproveite as ofertas e garante sua viagem com sua família </p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s6">
				<h2 class="header"></h2>
				<div class="card horizontal">
					<div class="card-image">
						<img src="imagens/ponte.jpg" width="250" height="200">
					</div>
					<div class="card-stacked">
						<div class="card-content">
							<p><b>Conheça a ponte do arco iris no Arizona</p></b>
							<p>Aproveite as ofertas e garante sua viagem com sua família </p>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div class="row">
				<div class="col s6">
					<h2 align="center" class="header"></h2>
					<div class="card horizontal">
						<div class="card-image">
							<img src="imagens/alemanha.jpg" width="250" height="200">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<p><b>Conheça a linda cidade de Hamburgo - Alemanha</p></b>
								<p>Aproveite as ofertas e garante sua viagem com sua família </p>
							</div>
						</div>
					</div>
				</div>
				<div class="col s6">
					<h2 class="header"></h2>
					<div class="card horizontal">
						<div class="card-image">
							<img src="imagens/pontegolden.jpg" width="250" height="200">
						</div>
						<div class="card-stacked">
							<div class="card-content">
								<p><b>Conheça a famosa ponte Golden Gate em São Francisco</p></b>
								<p>Aproveite as ofertas e garante sua viagem com sua família </p>
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
			<footer class="grey">
				<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Algum problema? fale com a gente</h5>
						<p class="grey-text text-lighten-4">Casarotti@hotmail.com</p>
						<p class="grey-text text-lighten-4">(18) 3608-8585</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Mais ajuda</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">> Dúvidas Frequentes</a>
							<li><a class="grey-text text-lighten-3" href="#!">> Tempo de Entrega</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">> Trocas e Devoluções</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">> Central de Relacionamento</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">> Regras de Voucher</a></li>
						</ul>
					</div>
				</div>
				
				<div class="footer-copyright">
					<div class="container">
						© 2018 Copyright Text
					</div>
				</div>
			</footer>
            
		</body>
	</html>  