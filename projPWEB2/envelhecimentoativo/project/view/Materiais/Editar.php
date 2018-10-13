 <?php
     include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Materiais.php';

     if(isset($_POST['id'])){      
        
        $id = $_POST['id'];
        $obj = new MateriaisController();    
                            
        $material = $obj->buscarPorId($id);
     }
?>

<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Editar de Material</h2>
            <div class="ln_solid"></div>
            <div class="x_content">
               <div class="col-md-3 col-xs-3"></div>
               <div class="col-md-6 col-sm-12 col-xs-6">
                  <form id="frmCadMaterial" method="POST" action="/envelhecimentoativo/project/controller/recebeMaterial.php?act=editar" data-parsley-validate class="form-horizontal justify-content-center">
                     <input id="Id" name="Id" type="hidden" value="<?php echo $material->getId(); ?>">   
                     <div class="form-group">                      
                        <label class="control-label" for="Nome">Nome:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="Nome" name="Nome" required="required" class="form-control" value="<?php echo $material->getNome(); ?>">             
                     </div>

                     <div class="form-group">                      
                        <label class="control-label" for="Descricao">Descrição:
                        <span class="required">*</span>
                        </label>            
                        <textarea rows="4" id="Descricao" name="Descricao" required="required" class="form-control"><?php echo $material->getDescricao(); ?>"</textarea>             
                     </div>
                     <div class="form-group">  

                        <label class="control-label" for="Arquivo">Selecione o Material:
                        <span class="required">*</span>
                        </label>            
                        <input type="file" id="Arquivo" name="Arquivo" class="form-control-file">             
                
                    </div>
                                       
                    <div class="ln_solid"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                           <button id="" class="btn btn-success" type="submit">Salvar</button>
                           <button class="btn btn-danger" type="reset">Limpar</button>        
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-3 col-xs-3"></div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="/envelhecimentoativo/project/js/materiais/index.js"></script>