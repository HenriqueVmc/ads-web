<?php
    
    include_once 'C:\xampp\htdocs\gentelella\project\model\Usuarios.php';
    include_once 'C:\xampp\htdocs\gentelella\project\DAO\usuariosDAO.php';
    
    //require_once ('C:\xampp\htdocs\gentelella\project\model\Usuarios.php');
    //require_once ('C:\xampp\htdocs\gentelella\project\DAO\usuariosDAO.php');
    //require_once ('C:\xampp\htdocs\gentelella\project\DAO\conexao.php');

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
            $usuarios = array();
            $usuarioDAO = new usuariosDAO();
            $usuarios = $usuarioDAO->findAll();
            
            return $usuarios;
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