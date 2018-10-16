<?php

    /* TIVE PROBLEMAS COM CAMINHOS RELATIVOS
    include_once 'Publicacoes.php';
    include_once '/envelhecimentoativo/project/model/Publicacoes.php';
    */
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Publicacoes.php';
    
    session_start();
    $id = $_POST['Id'];
    $assunto = $_POST['Assunto'];
    $descricao = $_POST['Descricao'];
    $usuarioId = $_SESSION['usuarioId']; //campo hidden na view ou SESSION, Será o usuário logado 
    $dataEvento = $_POST['DataEvento'];

    //Validar Campos

    $publicacao = new Publicacoes();
    if(isset($id)) $publicacao->setId($id);    
    if(isset($assunto)) $publicacao->setAssunto($assunto);
    if(isset($descricao)) $publicacao->setDescricao($descricao);   
    if(isset($dataEvento)) $publicacao->setDataEvento($dataEvento);   
    if(isset($usuarioId)) $publicacao->setUsuarioId($usuarioId); 

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