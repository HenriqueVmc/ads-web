<?php

    include_once 'C:\xampp\htdocs\gentelella\project\controller\Materiais.php';
    include_once 'C:\xampp\htdocs\gentelella\project\model\Materiais.php';
    
    $nome = $_POST['Nome'];
    $descricao = $_POST['Descricao'];
    //$user = $_POST['UsuarioId']; campo hidden na view ou SESSION, Será o usuário logado 
    $arquivo = $_POST['Arquivo'];

    //Validar Campos

    $material = new Materiais();
    $material->setNome($nome);
    $material->setDescricao($descricao);
    //$material->setUsuarioId($user);
    $material->setArquivo($arquivo);   

    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar"){

        $obj = new MateriaisController();
        $response = array("success" => false);
    
        if($obj->salvar($material)){
            $response = array("success" => true);        
        }

        echo json_encode($response);

        header("Location: http://localhost/gentelella/project/view/Shared/Master.php"); /* Redirect browser */
        exit();
    }
?>