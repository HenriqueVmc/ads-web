<?php
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\gentelella\project\model\Materiais.php';

	class materiaisDAO{
		public $_con;

		function __construct(){
			$conexaoBD = new Conexao();
			$this->_con = $conexaoBD->getConexao();			
        }

        public function findAll(){

            $result = array();
            $select = "SELECT Id, Nome, DataEnvio, Descricao, UsuarioId FROM materiais";
            
            $pst = $this->_con->prepare($select);
            $pst->execute();

            //die(var_dump($r, $pst->errorInfo()));

            if($pst->rowCount() > 0){
                $result = $pst->fetchAll();
            }
            return $result;	
        }

        public function findById($id){
            
            $result = null;
            $select = "SELECT * FROM materiais WHERE Id = ?";
            
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
                                1));
                            
            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function update($material){
            $update = "UPDATE FROM materiais SET Nome ='?', Descricao = '?' WHERE Id = ?";

            $pst = $this->_con->prepare($update);
            $pst->execute(array($material->getNome(),
                                $material->getDescricao(),
                                $material->getDataEnvio(),
                                $material->getUsuarioId()));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }
    }
?>


