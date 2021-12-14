<?php
	require_once("model/livros.class.php");
	
	
	Class model{
		
		public function getBookList(){
			return array(
				"Engenharia de software" => new Book("Engenharia de software ", " Tosing, S.L ", " Sobre analise"),
			);
		}
		
		public function getBook($title){
			$allBooks = $this->getBookList();
			return $allBooks[$title];
			
		}
	
		
	
	}
?>