<?php
		session_start();
		
		if (isset($_SESSION["fezlogin"])){
			
			if(isset($_SESSION['ultimaAtiv']) && (time() - $_SESSION['ultimaAtiv'] >5000)){
				session_unset();   //zerando os arrays
				session_destroy(); //destruindo os arrays
				
				echo '<script type="text/javascript">
				alert("Sessão expirou!");
				window.location="login.html";	
				</script>';
			}
		
			echo"<fieldset>";
			
			
			//session_save_path()  //mostra onde estão salvos os arquivos de sessão
			
			echo "O login do usuário: " . 
			$_SESSION["login"] . "<br>" .
			" ID da sessão: "  . 
			$_SESSION["identif"] . "<br>" .
			time() . "<br>" .
			" Vai expirar em " . (time()-$_SESSION['ultimaAtiv']). "<br>";
			echo"</fieldset>";
		}
		else {
			header("location: login.html");
		}

?>