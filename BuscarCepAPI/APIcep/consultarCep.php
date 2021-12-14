<?php
require_once("Db.class.php");

$metodo = $_SERVER['REQUEST_METHOD'];
$requerido = explode("/", substr(@$_SERVER['PATH_INFO'],1));

if ($requerido[0] == null) // foi acionado por html
{  
	$dados = lerDados($_GET["codigoCep"]);
	if(!empty($dados)) { 
	 foreach($dados as $linha) {
	// prepara o retorno dos dados para o browser
	 if ($linha)
	 {
	  $endereco   = $linha["endereco"];
	  $bairro     = $linha["bairro"];
	  $cidade     = $linha["cidade"];
	  header ('Content-type: text/html; charset=utf-8, true');  
	  echo "<TABLE cellSpacing=0 cellPadding=0 width=\"100%\" border=0 bgColor=#e6e6fa><TBODY>";
	  echo "
	  <TR><TD width=40% height=40%><P align=right><FONT color=red>Endereco:</FONT></TD><TD>$endereco</TD></TR>
	  <TR><TD width=40% height=40%><P align=right><FONT color=red>Bairro:</FONT></TD><TD>$bairro</TD></TR>
	  <TR><TD width=40% height=40%><P align=right><FONT color=red>Cidade:</FONT></TD><TD>$cidade</TD></TR>
	  </TBODY></TABLE>";
	}
	else {
		  echo "<p align=center><b>Cep Inexistente !!! </b></p>";
	     }
	}
}

}
else {   // acionado por API
	$json="";
	$dados = lerDados($requerido[0]);
	$retorno = array();
	if(!empty($dados)) { 
	 foreach($dados as $linha) {
	  $retorno[]  = $linha["endereco"];
	  $retorno[]  = $linha["bairro"];
	  $retorno[]  = $linha["cidade"];		 
	 }
	 $json=json_encode($retorno);
	 header('Content-Type: application/json');
	 echo $json;	 
	 exit();
	}
	else{
		
	}
}

function lerDados($cep)
{
	$db = new Db();
	$db->conectar();
	$db->setTabela("cep");	
	$codigoCep = $cep;
	$where = "codigoCep = '". $codigoCep ."'";
	$campos = "endereco, bairro, cidade";
	$dados = $db->consultar($where, $campos);
	return $dados;
}
?>
