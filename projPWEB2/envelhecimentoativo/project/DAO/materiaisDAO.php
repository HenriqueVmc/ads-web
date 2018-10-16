<?php
    include_once 'conexao.php';
    //include_once '/envelhecimentoativo/project/model/Materiais.php';    
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Materiais.php';

	class materiaisDAO{
		public $_con;

		function __construct(){
			$conexaoBD = new Conexao();
			$this->_con = $conexaoBD->getConexao();			
        }

        public function findAll(){

            $result = array();
            $select = "SELECT Id, Nome, DataEnvio, Descricao, Arquivo, UsuarioId FROM materiais";
            
            $pst = $this->_con->prepare($select);
            $pst->execute();

            //die(var_dump($r, $pst->errorInfo()));

            if($pst->rowCount() > 0){
                $result = $pst->fetchAll();
            }
            return $result;	
        }

        public function findById($id){
            
            $result = array();
            $select = "SELECT Id, Nome, Descricao, DataEnvio, Arquivo, UsuarioId FROM materiais WHERE Id = ?";
            
            $pst = $this->_con->prepare($select);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                $result = $pst->fetch();
            }

            return $result;	
        }
       
        public function insert($material){

            $insert = "INSERT INTO materiais (Nome, Descricao, DataEnvio, Arquivo, UsuarioId) VALUES (?, ?, ?, ?, ?)";
            
            $pst = $this->_con->prepare($insert);
            $pst->execute(array($material->getNome(),
                                $material->getDescricao(),
                                date("Y-m-d H:i:s"),
                                $material->getArquivo(),
                                $material->getUsuarioId()));
                            
            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function update($material){
            $update = "UPDATE materiais SET Nome = ?, Descricao = ?, DataEnvio = ?, Arquivo = ?, UsuarioId = ? WHERE Id = ?";

            $pst = $this->_con->prepare($update);
            $pst->execute(array($material->getNome(),
                                $material->getDescricao(),
                                date("Y-m-d H:i:s"),
                                $material->getArquivo(),
                                $material->getUsuarioId(),
                                $material->getId()));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function delete($id){
            
            $delete = "DELETE FROM materiais WHERE Id = ?";

            $pst = $this->_con->prepare($delete);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }
    }
?>


