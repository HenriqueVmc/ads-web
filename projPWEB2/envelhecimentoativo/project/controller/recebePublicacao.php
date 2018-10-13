<?php

    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Publicacoes.php';
    
    $id = $_POST['Id'];
    $assunto = $_POST['Assunto'];
    $descricao = $_POST['Descricao'];
    session_start();
    $usuarioId = $_SESSION['usuarioId']; //campo hidden na view ou SESSION, Será o usuário logado 
    $dataEvento = $_POST['DataEvento'];

    //Validar Campos

    $publicacao = new Publicacoes();
    if (isset($id)){
        $publicacao->setId($id);
    }
    $publicacao->setAssunto($assunto);
    $publicacao->setDescricao($descricao);   
    $publicacao->setDataEvento($dataEvento);   
    $publicacao->setUsuarioId($usuarioId); 

    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar"){

        $obj = new PublicacoesController();
        $response = array("success" => false);
    
        if($obj->salvar($publicacao)){
            $response = array("success" => true);        
        }

        header("Location: http://localhost/envelhecimentoativo/project/view/Shared/Master.php"); /* Redirect browser */
        exit();
    }
    else if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "editar"){

        $obj = new PublicacoesController();
        $response = array("success" => false);
    
        if($obj->editar($publicacao)){
            $response = array("success" => true);        
        }

        //header("Location: http://localhost/envelhecimentoativo/project/view/Shared/Master.php"); /* Redirect browser */
        //exit();
    }
    echo json_encode($response);
?>