<?php
    
    //include_once '/gentelella/project/model/Usuarios.php';
    //include_once '/gentelella/project/DAO/usuariosDAO.php';

    include_once 'C:\xampp\htdocs\gentelella\project\model\Usuarios.php';
    include_once 'C:\xampp\htdocs\gentelella\project\DAO\usuariosDAO.php';
    class UsuariosController{

		function __construct(){
           
            // $id = $_POST['Id'];
            // $nome = $_POST['Nome'];
            // $cep = $_POST['Cep'];
            // $email = $_POST['Email'];
            // $usuario = $_POST['Usuario'];
            // $senha = $_POST['Senha'];
            // $perfilId = $_POST['PerfilId']; 
        }

        public function salvar($usuario){

            $usuarioDAO = new usuariosDAO();
            $ret = $usuarioDAO->insert($usuario);

            return $ret;
        }        

        public function deletar($cod){
            
            $usuarioDAO = new usuariosDAO();
            $usuario = $usuarioDAO->findById($cod);
            $usuarioDAO->delete($usuario);
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

                $retorno[] = $usuario;
            }
    
            return $retorno;
        }

        public function buscarPorId($cod){
            $usuario = new Usuario();
            $usuarioDAO = new usuariosDAO();
            $usuario = $usuarioDAO->findById($cod);
            
            return $usuario;
        }
    }
 
    // $obj = new UsuariosController();
    // $response = array("success" => false);
    // if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar") {
    //    if($obj->salvar()){
    //         $response = array("success" => true);        
    //     }         
    // }
     
    // echo json_encode($response);
?>