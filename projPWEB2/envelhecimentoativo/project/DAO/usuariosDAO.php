<?php
    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Usuarios.php';
    //include_once '/envelhecimentoativo/project/model/Usuarios.php';

	class usuariosDAO{
		public $_con;

		function __construct(){
			$conexaoBD = new Conexao();
			$this->_con = $conexaoBD->getConexao();			
        }

        public function findAll(){

            $result = array();
            $select = "SELECT Id, Nome, Cep, Email, Usuario, Senha, PerfilId FROM usuarios";
            
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
            $select = "SELECT Id, Nome, Cep, Email, Usuario, Senha, PerfilId FROM usuarios WHERE Id = ?";
            
            $pst = $this->_con->prepare($select);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                $result = $pst->fetch();
            }

            return $result;	
        }
       
        public function insert($usuario){

            $insert = "INSERT INTO usuarios (Nome, Cep, Email, Usuario, Senha, PerfilId) VALUES (?, ?, ?, ?, ?, ?)";

            $pst = $this->_con->prepare($insert);
            $pst->execute(array($usuario->getNome(),
                                $usuario->getCep(),
                                $usuario->getEmail(),
                                $usuario->getUsuario(),
                                $usuario->getSenha(), 
                                $usuario->getPerfilId()));
                                                           
            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function update($usuario){

            $update = "UPDATE usuarios SET Nome = ?, Cep = ?, Email = ?, Usuario = ?, Senha = ?, PerfilId = ? WHERE Id = ?";

            $pst = $this->_con->prepare($update);
            $pst->execute(array($usuario->getNome(),
                                $usuario->getCep(),
                                $usuario->getEmail(),
                                $usuario->getUsuario(),
                                $usuario->getSenha(),
                                $usuario->getPerfilId(),
                                $usuario->getId()));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function delete($id){
            
            $delete = "DELETE FROM usuarios WHERE Id = ?";

            $pst = $this->_con->prepare($delete);
            $pst->execute(array($id));

            if($pst->rowCount() > 0){
                return true;
            }
            return false;	
        }

        public function findForLogin($u, $s){
                      
            $result = array();
            $select = "SELECT Id, Nome, Cep, Email, Usuario, Senha, PerfilId FROM usuarios WHERE Usuario = ? AND Senha = ?";
            
            $pst = $this->_con->prepare($select);
            $pst->execute(array($u, $s));

            if($pst->rowCount() > 0){
                $result = $pst->fetch();
            }

            return $result;	
        }
    }
?>


