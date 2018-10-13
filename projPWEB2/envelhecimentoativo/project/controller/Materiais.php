<?php
    
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Materiais.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\DAO\materiaisDAO.php';
    
    //require_once ('C:\xampp\htdocs\envelhecimentoativo\project\model\materiais.php');
    //require_once ('C:\xampp\htdocs\envelhecimentoativo\project\DAO\materiaisDAO.php');
    //require_once ('C:\xampp\htdocs\envelhecimentoativo\project\DAO\conexao.php');

    class MateriaisController{

		function __construct(){
        }

        public function salvar($material){

            $materialDAO = new materiaisDAO();
            $ret = $materialDAO->insert($material);

            return $ret;
        }        

        public function editar($material){

            $materialDAO = new materiaisDAO();
            $ret = $materialDAO->update($material);

            return $ret;
        }     

        public function deletar($cod){
            
            $materialDAO = new materiaisDAO();
            $materialDAO->delete($cod);
        }

        public function buscarTodos(){
            $retorno = [];

            $materialDAO = new materiaisDAO();
            $materiais = $materialDAO->findAll();
            
            foreach($materiais as $registro){

                $material = new Materiais();
                $material->setId($registro['Id']);
                $material->setNome($registro['Nome']);
                $material->setDescricao($registro['Descricao']);
                $material->setDataEnvio($registro['DataEnvio']);
                $material->setUsuarioId($registro['UsuarioId']);              

                $retorno[] = $material;
            }
    
            return $retorno;
        }

        public function buscarPorId($cod){

            $materialDAO = new materiaisDAO();
            $registro = $materialDAO->findById($cod);
            
            $material = new Materiais();
            $material->setId($registro['Id']);
            $material->setNome($registro['Nome']);
            $material->setDescricao($registro['Descricao']);
            $material->setDataEnvio($registro['DataEnvio']);
            $material->setUsuarioId($registro['UsuarioId']);                  

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