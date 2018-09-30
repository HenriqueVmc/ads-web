<?php

	class Conexao{
		
		private $_conn;
		
		function __construct(){
			//mysql://[USUARIO]:[PASSWORD]@[HOST]/[NOME DO BANCO]
			$this->_conn = new PDO("mysql://root@localhost/dbEnvelhecimentoAtivo");//mysql:host=localhost:81;dbname=dbEnvelhecimentoAtivo","root","hvmc1899"			
		}

		public function getConexao(){
			return $this->_conn;
		}
	}

	/* TESTE DE CONEXAO, DEVE APARECER: object(PDO)#2 (0) { } 
	$conexao = new Conexao();
	$con = $conexao->getConexao();
	die(var_dump($con));
	*/
?>
