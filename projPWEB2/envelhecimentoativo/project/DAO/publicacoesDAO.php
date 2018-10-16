<?php
    include_once 'conexao.php';
    //include_once '/envelhecimentoativo/project/model/Publicacoes.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Publicacoes.php';

	class publicacoesDAO{
		public $_con;

		function __construct(){
			$conexaoBD = new Conexao();
			$this->_con = $conexaoBD->getConexao();			
        }

        public function findAll(){

            $result = array();
            $select = "SELECT Id, Assunto, DataEvento, Descricao, UsuarioId, DataPublicacao FROM publicacoes";
            
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
            $select = "SELECT Id, Assunto, DataEvento, Descricao, UsuarioId, DataPublicacao FROM publicacoes WHERE Id = ?";
            
            $pst = $this->_con->prepare($select);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                $result = $pst->fetch();
            }

            return $result;	
        }
       
        public function insert($publicacao){

            $insert = "INSERT INTO publicacoes (Assunto, Descricao, DataEvento, UsuarioId, DataPublicacao) VALUES (?, ?, ?, ?, ?)";
            
            $pst = $this->_con->prepare($insert);
            $pst->execute(array($publicacao->getAssunto(),
                                $publicacao->getDescricao(),
                                $publicacao->getDataEvento(),                                
                                $publicacao->getUsuarioId(),
                                date("Y-m-d H:i:s")));
                            
            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function update($publicacao){
            $update = "UPDATE publicacoes SET Assunto = ?, Descricao = ?, DataEvento = ?, UsuarioId = ?, DataPublicacao = ? WHERE Id = ?";

            $pst = $this->_con->prepare($update);
            $pst->execute(array($publicacao->getAssunto(),
                                $publicacao->getDescricao(),
                                $publicacao->getDataEvento(),                                                                
                                $publicacao->getUsuarioId(),
                                date("Y-m-d H:i:s"), 
                                $publicacao->getId()));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function delete($id){
            
            $delete = "DELETE FROM publicacoes WHERE Id = ?";

            $pst = $this->_con->prepare($delete);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }
    }
?>


