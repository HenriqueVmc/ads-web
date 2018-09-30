<?php

    include_once 'C:\xampp\htdocs\gentelella\project\controller\Usuarios.php';
    include_once 'C:\xampp\htdocs\gentelella\project\model\Usuarios.php';
    
    $nome = $_POST['Nome'];
    $cep = $_POST['Cep'];
    $email = $_POST['Email'];
    $user = $_POST['Usuario'];
    $senha = $_POST['Senha'];

    //Validar Campos

    $usuario = new Usuarios();
    $usuario->setNome($nome);
    $usuario->setCep($cep);
    $usuario->setEmail($email);
    $usuario->setUsuario($user);
    $usuario->setSenha($senha);   

    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "salvar"){

        $obj = new UsuariosController();
        $response = array("success" => false);
    
        if($obj->salvar($usuario)){
            $response = array("success" => true);        
        }

        echo json_encode($response);
    }
?>