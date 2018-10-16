<?php

    //include_once 'Usuarios.php';
    //include_once 'Profissionais.php';
    //include_once '/envelhecimentoativo/project/model/Usuarios.php';
    //include_once '/envelhecimentoativo/project/model/Profissionais.php';
    
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Usuarios.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Profissionais.php';    
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Usuarios.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Profissionais.php';    
    
    $id = $_POST['Id'];
    $nome = $_POST['Nome'];
    $cep = $_POST['Cep'];
    $email = $_POST['Email'];
    $user = $_POST['Usuario'];
    $senha = $_POST['Senha'];
    $perfilId = $_POST['PerfilId'];

    //Para Perfil Profissional
    $curso = $_POST['Curso'];
    $instituicao = $_POST['Instituicao'];

    //Validar Campos
    $usuario = new Usuarios();    
    if (isset($id)) $usuario->setId($id);    
    if (isset($nome)) $usuario->setNome($nome);
    if (isset($cep)) $usuario->setCep($cep);
    if (isset($email)) $usuario->setEmail($email);
    if (isset($user)) $usuario->setUsuario($user);
    if (isset($senha)) $usuario->setSenha($senha);   
    if (isset($perfilId)) $usuario->setPerfilId($perfilId); 

    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar"){

        $obj = new UsuariosController();
        $response = array("success" => false);
        
        $usuarioId = $obj->salvar($usuario);
         
        if($usuarioId > 0){
            $response = array("success" => true);        
        }

        // CADASTRA PERFIL PROFISSIONAL (1:N)
        if(isset($curso)){
            $profissional = new Profissionais();
            $profissional->setCurso($curso); 
            $profissional->setInstituicao($instituicao);             
            $profissional->setUsuarioId($usuarioId);
            
            $objP = new ProfissionaisController();
            
            $response = array("success" => false);
        
            if($objP->salvar($profissional)){
                $response = array("success" => true);        
            }   
        }
        echo json_encode($response);
    }

    else if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "editar"){

        $obj = new UsuariosController();
        $response = array("success" => false);
    
        if($obj->editar($usuario)){
            $response = array("success" => true);        
        }

        echo json_encode($response);
    }

    else if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "login"){

        $obj = new UsuariosController();
        $response = array("success" => false);
    
        if($obj->login($usuario)){
            $response = array("success" => true);        
        }

        echo json_encode($response);
    }
?>