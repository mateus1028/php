<?php

	session_start();
	if (isset($_SESSION["fezlogin"])){
		
		if(isset($_SESSION['ultimaAtiv']) && (time() - $_SESSION['ultimaAtiv'] >2)){
			session_unset();   //zerando os arrays
			session_destroy(); //destruindo os arrays
		
			echo '<script type="text/javascript">
			alert("Sessão expirou!");
			window.location="login.html";	
			</script>';
		}

		echo"Foi feito alguma coisa agora.";
		$_SESSION['ultimaAtiv']=time();
		echo "<a href='menusessao.php> Clique aqui para voltar ao menu.<a/>";


	}
	else {
		header("location: login.html");
	}

?>