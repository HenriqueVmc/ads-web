<?php
    include_once 'conexao.php';
    //include_once '/envelhecimentoativo/project/model/profissionais.php';    
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Profissionais.php';

	class profissionaisDAO{
		public $_con;

		function __construct(){
			$conexaoBD = new Conexao();
			$this->_con = $conexaoBD->getConexao();			
        }

        public function findAll(){

            $result = array();
            $select = "SELECT Id, Curso, Instituicao, UsuarioId FROM profissionais";
            
            $pst = $this->_con->prepare($select);
            $pst->execute();

            //die(var_dump($r, $pst->errorInfo()));

            if($pst->rowCount() > 0){
                $result = $pst->fetchAll();
            }
            return $result;	
        }

        public function findByUserId($id){
            
            $result = array();
            $select = "SELECT Id, Curso, Instituicao, UsuarioId FROM profissionais WHERE UsuarioId = ?";
            
            $pst = $this->_con->prepare($select);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                $result = $pst->fetch();
            }

            return $result;	
        }
        
        public function findById($id){
            
            $result = array();
            $select = "SELECT Id, Curso, Instituicao, UsuarioId FROM profissionais WHERE Id = ?";
            
            $pst = $this->_con->prepare($select);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                $result = $pst->fetch();
            }

            return $result;	
        }
        public function insert($profissional){

            $insert = "INSERT INTO profissionais (Curso, Instituicao, UsuarioId) VALUES (?, ?, ?)";
            
            $pst = $this->_con->prepare($insert);
            $pst->execute(array($profissional->getCurso(),
                                $profissional->getInstituicao(),
                                $profissional->getUsuarioId()));
                            
            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function update($profissional){
            $update = "UPDATE profissionais SET Curso = ?, Instituicao = ?, UsuarioId = ? WHERE Id = ?";

            $pst = $this->_con->prepare($update);
            $pst->execute(array($profissional->getCurso(),
                                $profissional->getInstituicao(),                        
                                $profissional->getUsuarioId(),
                                $profissional->getId()));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function delete($id){
            
            $delete = "DELETE FROM profissionais WHERE Id = ?";

            $pst = $this->_con->prepare($delete);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }
    }
?>


