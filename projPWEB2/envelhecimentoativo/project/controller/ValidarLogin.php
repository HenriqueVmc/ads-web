<?php
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\DAO\conexao.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Usuarios.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\DAO\usuariosDAO.php';    
    
    $response = array();
    
    if(isset($_POST['Usuario']) && isset($_POST['Senha'])){
       
        $usuario = $_POST['Usuario'];
        $senha = $_POST['Senha'];

        try{
            $usuarioDAO = new usuariosDAO();        
            $encontrado = new Usuarios();

            $registro = $usuarioDAO->findForLogin($usuario, $senha);

            if($registro != null){
                $encontrado->setId($registro['Id']);
                $encontrado->setNome($registro['Nome']);
                $encontrado->setCep($registro['Cep']);
                $encontrado->setEmail($registro['Email']);
                $encontrado->setUsuario($registro['Usuario']);                            
                $encontrado->setSenha($registro['Senha']);                
                $encontrado->setPerfilId($registro['PerfilId']);  
                
                //
                // if(isset($_POST['Lembrar'])){
                //     if (isset($_COOKIE['usuario']) == false) {
                //         setcookie('usuario', $encontrado->getUsuario(), time()+60*60*7);
                //         setcookie('senha', $encontrado->getSenha(), time()+60*60*7);
                //     }
                // }
                session_start();
                $_SESSION['nome'] = $encontrado->getNome();
                $_SESSION['usuarioId'] = $encontrado->getId();
                $_SESSION['perfilId'] = $encontrado->getPerfilId();

                //die(var_dump($_SESSION['perfilId']));

                //$response = array("success" => true);                                                       

                header("Location: http://localhost:81/envelhecimentoativo/project/view/Shared/Master.php"); /* Redirect browser */
                exit();
            }

        }catch(Exception $e) {
            echo 'Erro: '.$e->getMessage();
        }

    }else{
        //$response = array("success" => false, "msg"=> "Erro Inesperado!");
        
    }
    header("Location: http://localhost:81/envelhecimentoativo/login.php"); /* Redirect browser */
    exit();
    //echo json_encode($response);
?>

