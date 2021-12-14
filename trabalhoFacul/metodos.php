<?php
require_once 'classes/Empresa.class.php';
$obj = new Empresa();
$obj->setTabela("pacotes");
	
	
	if(isset($_POST['logar'])){
		if($obj->logar($_POST) == 'ok'){
			session_start();
			$_SESSION["fezlogin"] 	= true;
			$_SESSION['email'] 		= $email;
			$_SESSION['senha'] 		= $senha;
			$_SESSION["login"]    	= $login;
			$_SESSION["identif"]  	= session_id();
			header('location:central.php');
		}
		else{
			unset ($_SESSION['email']);
			unset ($_SESSION['senha']);
			echo '<script type="text/javascript">
			alert("Conta não cadastrada!");
			window.location="login.php";
			</script>';
			
		}
	}
	

	// parte do cadastrar
	if(isset($_POST['cadastrarConta'])){
		if($_POST["email"] and $_POST["senha"] == ""){
			echo '<script type="text/javascript">
			alert("Preencha todos os campos!");
			window.location="login.php";
			</script>';

		}
		else{
		   if(($obj->inserir($_POST) == 'ok')){
				echo '<script type="text/javascript">
				alert("Conta cadastrada!");
				window.location="login.php";
				</script>';
		   }
		}
	}
	
	//cadastrando viagem
	if(isset($_POST['cadastrarViagem'])){
	
		if($obj->inserirViagem($_POST)){
			echo '<script type="text/javascript">
			alert("Viagem cadastrada!");
			window.location="central.php";	
			</script>';		
		}
	
		
		
	}
	
	// alterando viagem
	if(isset($_POST['alterar'])){
		$acao = null;
		$dados = array();
		$where = "idPacote=" . $_POST['idPacote'];	 
		$dados["empresa"]         =  	"'" . $_POST['empresa'] . "'";
		$dados["telefone"]        =  	"'" . $_POST['telefone'] . "'";
		$dados["cidade"]          =  	"'" . $_POST['cidade'] . "'";
		$dados["hotel"]           =  	"'" . $_POST['hotel'] . "'";
		$dados["dias"]            =  	"'" . $_POST['dias'] . "'";
		$dados["preco"]           =  	"'" . $_POST['preco'] . "'";
		$obj->alterar($where,$dados);
		
		echo '<script type="text/javascript">
		alert("Viagem alterada!");
		window.location="alterarViagem.php";	
		</script>';
		
	}
	
	if($_POST['excluir'] == "excluir"){
		$where = "idPacote=" . $_POST['idPacote'];
		$dados  = $obj->excluir($where); 
		echo '<script type="text/javascript">
		alert("Viagem excluida!");
		window.location="alterarViagem.php";	
		</script>';		
   
	}
	
	
	if($_POST['sair'] == "sair"){
		$where = "idSession=" . $_POST['idSession'];
		$dados  = $obj->excluir($where); 
		
   
	}


?>
