<?php
     include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';

     if(isset($_POST['id'])){      
        
        $id = $_POST['id'];
        $obj = new PublicacoesController();    
                            
        $publicacao = $obj->deletar($id);

     }
?>
