<?php
    
    //include_once '/envelhecimentoativo/project/model/Usuarios.php';
    //include_once '/envelhecimentoativo/project/DAO/usuariosDAO.php';

    require_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Usuarios.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\DAO\usuariosDAO.php';
    class UsuariosController{

		function __construct(){
        }

        public function salvar($usuario){

            $usuarioDAO = new usuariosDAO();
            $ret = $usuarioDAO->insert($usuario);

            return $ret;
        }        

        public function editar($usuario){

            $usuarioDAO = new usuariosDAO();
            $ret = $usuarioDAO->update($usuario);

            return $ret;
        }     

        public function deletar($cod){
            
            $usuarioDAO = new usuariosDAO();
            $usuarioDAO->delete($cod);
        }

        public function buscarTodos(){
            
            $retorno = [];
            $usuarioDAO = new usuariosDAO();
            $usuarios = $usuarioDAO->findAll();  

            foreach($usuarios as $registro){

                $usuario = new Usuarios();
                $usuario->setId($registro['Id']);
                $usuario->setNome($registro['Nome']);
                $usuario->setCep($registro['Cep']);
                $usuario->setEmail($registro['Email']);
                $usuario->setUsuario($registro['Usuario']);                            
                $usuario->setSenha($registro['Senha']);                
                $usuario->setPerfilId($registro['PerfilId']);

                $retorno[] = $usuario;
            }
    
            return $retorno;
        }

        public function buscarPorId($cod){
          
            $usuarioDAO = new usuariosDAO();
            $registro = $usuarioDAO->findById($cod);

            $usuario = new Usuarios();
            $usuario->setId($registro['Id']);
            $usuario->setNome($registro['Nome']);
            $usuario->setCep($registro['Cep']);
            $usuario->setEmail($registro['Email']);
            $usuario->setUsuario($registro['Usuario']);                            
            $usuario->setSenha($registro['Senha']);  
            $usuario->setPerfilId($registro['PerfilId']); 
            
            return $usuario;
        }
    }
?>