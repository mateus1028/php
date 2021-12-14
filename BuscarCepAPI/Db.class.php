<?php
  class Db {
     private $host;
     private $porta;
     private $usudb;
     private $nomedb;
     private $senhadb;
     private $conexao;
     private $tabela;

     function __construct($host="127.0.0.1",
                          $porta="3306",
                          $usudb="root",
                          $nomedb="unisale",
                          $senhadb=""){
     	$this->host     = $host;
     	$this->porta    = $porta;
      $this->nomedb   = $nomedb;
     	$this->usudb    = $usudb;
     	$this->senhadb  = $senhadb;

     }

 public function conectar(){
 $dados = "mysql:host="       . $this->host;
 $dados = $dados . ";port="   . $this->porta;
 $dados = $dados . ";dbname=" . $this->nomedb;
 $this->conexao = new PDO($dados,
                           $this->usudb,
                           $this->senhadb);
}

 public function setTabela($tabela){
  $this->tabela = $tabela;
 }

 public function consultar($where="",
                           $campos="*"){
  $sql = "SELECT " . $campos . " FROM " .
         $this->tabela;

  if ($where != ""){
      $sql = $sql . " WHERE " . $where;            
  }
//  echo "$sql<br>";
  return $this->executaSQL($sql);

 }

 public function executaSQL($sql){
  $dados = array();
  $sql = trim($sql);
  try{
    $this->conexao->beginTransaction();
    $resultado=$this->conexao->query($sql);
    $this->conexao->commit();
    }
  catch(PDOException $e) {
    $this->conexao->rollBack();
    $resultado = NULL;
    $mensagem  = $e->getMessage();
    file_put_contents("erro.log", $mensagem);
    }
  if ($resultado){
   while($row=$resultado->fetch(PDO::FETCH_ASSOC))
    {
      $dados[] = $row;
    }
  }
  return $dados;

  }

  public function gravar($dados = null){
    $campos   = implode(",",array_keys($dados));
    $valores  = implode("','",array_values($dados));
    $query = "INSERT INTO ".$this->tabela." (" .
              $campos.") VALUES ('".$valores."')";
//    echo "$query<br>";
    return $this->executaSQL($query);
  }

  public function alterar($where = null,
                          $dados = null){
  if(!is_null($where)){
      $valores = array();
      foreach($dados as $key=>$value){
        $valores[] = $key."='".$value."'";
      }
      $valores = implode(',',$valores);
      $query = "UPDATE ".$this->tabela." SET ".
                $valores." WHERE ".$where;
//      echo "$query<br>";
      return $this->executaSQL($query);
  } 
  else {
         return false;
       }
  }


  public function excluir($where = null){
    if(!is_null($where)){
      $query = "DELETE FROM ".$this->tabela." WHERE ".$where;
//      echo "$query<br>";
      return $this->executaSQL($query);
     }
     else{
      return false;
    }
  }  

  
}

?>