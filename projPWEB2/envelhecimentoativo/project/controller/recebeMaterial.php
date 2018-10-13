<?php

    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Materiais.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Materiais.php';
    
    $id = $_POST['Id'];
    $nome = $_POST['Nome'];
    $descricao = $_POST['Descricao'];
    session_start();
    $usuarioId = $_SESSION['usuarioId']; //campo hidden na view ou SESSION, Será o usuário logado 
    $arquivo = $_POST['Arquivo'];

    //Validar Campos

    $material = new Materiais();
    if (isset($id)){
        $material->setId($id);
    }
    $material->setNome($nome);
    $material->setDescricao($descricao);
    $material->setArquivo($arquivo);      
    $material->setUsuarioId($usuarioId); 

    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar"){

        $obj = new MateriaisController();
        $response = array("success" => false);
    
        if($obj->salvar($material)){
            $response = array("success" => true);        
        }

        echo json_encode($response);

        header("Location: http://localhost/envelhecimentoativo/project/view/Shared/Master.php"); /* Redirect browser */
        exit();
    }

    else if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "editar"){
        $obj = new MateriaisController();
        $response = array("success" => false);
    
        if($obj->editar($material)){
            $response = array("success" => true);        
        }

        echo json_encode($response);
    }
?>