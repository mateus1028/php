<?php

require_once("model/Model.class.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function executar()
	{
		// mostra uma lista de livros
		if (!isset($_GET['book']))
		{
			$books = $this->model->getBookList();
			require_once ("view/booklist.php");
		}
		else
		{
			// mostra o livro solicitado
			$book = $this->model->getBook($_GET['book']);
			require_once ("view/viewbook.php");
		}
	}
}

?>
