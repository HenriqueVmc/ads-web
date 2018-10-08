<?php
    
    include_once 'C:\xampp\htdocs\gentelella\project\model\Materiais.php';
    include_once 'C:\xampp\htdocs\gentelella\project\DAO\materiaisDAO.php';
    
    //require_once ('C:\xampp\htdocs\gentelella\project\model\materiais.php');
    //require_once ('C:\xampp\htdocs\gentelella\project\DAO\materiaisDAO.php');
    //require_once ('C:\xampp\htdocs\gentelella\project\DAO\conexao.php');

    class MateriaisController{

		function __construct(){
           
            // $id = $_POST['Id'];
            // $nome = $_POST['Nome'];
            // $cep = $_POST['Cep'];
            // $email = $_POST['Email'];
            // $material = $_POST['material'];
            // $senha = $_POST['Senha'];
            // $perfilId = $_POST['PerfilId']; 
        }

        public function salvar($material){

            $materialDAO = new materiaisDAO();
            $ret = $materialDAO->insert($material);

            return $ret;
        }        

        public function deletar($cod){
            
            $materialDAO = new materiaisDAO();
            $material = $materialDAO->findById($cod);
            $materialDAO->delete($material);
        }

        public function buscarTodos(){
            $materiais = array();
            $materialDAO = new materiaisDAO();
            $materiais = $materialDAO->findAll();
            
            return $materiais;
        }

        public function buscarPorId($cod){
            $material = new material();
            $materialDAO = new materiaisDAO();
            $material = $materialDAO->findById($cod);
            
            return $material;
        }
    }
 
    // $obj = new materiaisController();
    // $response = array("success" => false);
    // if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar") {
    //    if($obj->salvar()){
    //         $response = array("success" => true);        
    //     }         
    // }
     
    // echo json_encode($response);
?>