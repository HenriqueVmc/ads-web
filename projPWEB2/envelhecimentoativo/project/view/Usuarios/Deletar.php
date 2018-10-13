<?php
     include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Usuarios.php';

     if(isset($_POST['id'])){      
        
        $id = $_POST['id'];
        $obj = new UsuariosController();    
                            
        $usuario = $obj->deletar($id);

     }
?>
