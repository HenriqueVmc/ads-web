<?php
     include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Materiais.php';

     if(isset($_POST['id'])){      
        
        $id = $_POST['id'];
        $obj = new MateriaisController();    
                            
        $material = $obj->deletar($id);

     }
?>
