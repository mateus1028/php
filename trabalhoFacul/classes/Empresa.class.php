<?php
include_once ("db.class.php");

class Empresa{

    private $con;
	private $obj;
	private $idEmpresa;
    private $email;
    private $senha;
	private $empresa;
    private $telefone;
    private $cidade;
    private $hotel;
	private $dias;
	private $preco;
	private $tabela;

    public function __construct(){
        $db = new Conexao();
		$this->con = $db->conectar();

    }

	// criando conta
    public function inserir($dados){
        try{

            $this->email 	= $dados['email'];
            $this->senha	= sha1 ($dados['senha']);
            $sql = $this->con->prepare("INSERT INTO empresa (email, senha) VALUES (:email, :senha);");
			// usado bindParam para vincular a variável
            $sql->bindParam(":email",  $this->email, PDO::PARAM_STR);
            $sql->bindParam(":senha",  $this->senha, PDO::PARAM_STR);

            if($sql->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
	
	// logando na conta
	public function logar($dados){
		session_start();
		$this->email = $dados['email'];
		$this->senha = $dados['senha'];
		$sessi = session_id();
		date_default_timezone_set("America/Sao_Paulo");
		$data = date("Y/m/d");
		$hora = date("H:i:s");
		
		try{
			
			$sql = $this->con->prepare("SELECT 'sucesso' as sucesso, idEmpresa FROM empresa WHERE email = :email AND senha = :senha;");
			
			$sql->bindParam(":email", $this->email, PDO::PARAM_STR);
			$sql->bindParam(":senha",sha1($this->senha), PDO::PARAM_STR);
			$sql->execute();
			$reg = $sql->fetch(PDO::FETCH_ASSOC);
			if($reg['sucesso'] == 'sucesso'){
				
				$id = $reg["idEmpresa"];
				$sql = $this->con->prepare("INSERT INTO sessions (sessions, dia, hora, idEmpresa) VALUES ('$sessi', '$data', '$hora', '$id')"); 
				$sql->execute();
				return "ok";
			}

		}
			catch(PDOException $ex){
			return $ex->getMessage();
		}
	}
	
	

	
	// cadastrando viagem
	public function inserirViagem($dados){
        try{
			
			
            $this->empresa 	= $dados['empresa'];
            $this->telefone	= $dados['telefone'];
            $this->cidade	= $dados['cidade'];
            $this->hotel 	= $dados['hotel'];
			$this->dias 	= $dados['dias'];
			$this->preco	= $dados['preco'];

            $sql = $this->con->prepare("INSERT INTO `pacotes` (`empresa`, `telefone`, `cidade`, `hotel`, `dias`, `preco` ) VALUES (:empresa, :telefone, :cidade, :hotel, :dias, :preco);");
            $sql->bindParam(":empresa",  $this->empresa, PDO::PARAM_STR);
            $sql->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
            $sql->bindParam(":cidade", 	 $this->cidade, PDO::PARAM_STR);
            $sql->bindParam(":hotel", 	 $this->hotel, PDO::PARAM_STR);
			$sql->bindParam(":dias", 	 $this->dias, PDO::PARAM_STR);
			$sql->bindParam(":preco", 	 $this->preco, PDO::PARAM_STR);
            
            if($sql->execute()){
                return 'ok';
            }else{
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error '.$ex->getMessage();
        }
    }
	


	public function getConexao(){
		return $this->con;
	}
		
		
	public function setTabela($tabela){
		$this->tabela = $tabela;
	}
		
	public function executaSQL($sql){
		$dados = array();
		$sql = trim($sql);

		try{
			$this->con->beginTransaction();
			$resultado = $this->con->query($sql);
			$this->con->commit();
		}catch(PROException $e){
			$this->con->rollBack();
			$resultado = NULL;
			$mensagem = $e->getMessage();
			file_put_contents("erro.log", $mensagem);
		}
		if($resultado){
				
			while($row=$resultado->fetch(PDO::FETCH_ASSOC)){
				$dados[] = $row;
			}
			return $dados;
		}
	}	
	
	public function consultar($where="",$campos="*"){
		$sql = "SELECT " . $campos . " FROM " . $this->tabela;

		if ($where != "") {
			$sql = $sql . " WHERE " . $where;	
		}
		return $this->executaSQL($sql);
	}
	
	
	public function alterar($where = null,$dados = null){                 
		if(!is_null($where)){
			$valores = array();
			foreach($dados as $key=>$value){
				$valores[] = $key."=".$value;
			}
			$valores = implode(',',$valores);
			$query = "UPDATE ".$this->tabela." SET ".
			$valores." WHERE ".$where;
			return $this->executaSQL($query);
		} 
		else {
         return false;
		}
	}
  
	public function excluir($where = null){
		if(!is_null($where)){
			$query = "DELETE FROM ".$this->tabela." WHERE ".$where;
			return $this->executaSQL($query);
		}
		else{
			return false;
		}
	} 
	public function buscarSessao($login){
        $sql = "SELECT * FROM sessions";
        $query = $this->con->prepare($sql);
        $query->execute();
		$resultado = $query->fetch(PDO::FETCH_ASSOC);
        return $resultado['sessions'];
    }
	
}
?>
