 <?php
     include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';

     if(isset($_POST['id'])){      
        
        $id = $_POST['id'];
        $obj = new PublicacoesController();    
                            
        $publicacao = $obj->buscarPorId($id);
     }
?>

<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Editar Publicação</h3>
            <div class="ln_solid"></div>
            <div class="x_content">
               <div class="col-md-3 col-xs-3"></div>
               <div class="col-md-6 col-sm-12 col-xs-6">
                  <form id="frmCadPublicacao" method="POST" action="/envelhecimentoativo/project/controller/recebePublicacao.php?act=editar" data-parsley-validate class="form-horizontal justify-content-center">
                     <input id="Id" name="Id" type="hidden" value="<?php echo $publicacao->getId(); ?>" />   
                     <div class="form-group">                      
                        <label class="control-label" for="Assunto">Assunto:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="Assunto" name="Assunto" required="required" class="form-control" value="<?php echo $publicacao->getAssunto(); ?>"/>             
                     </div>

                     <div class="form-group">                      
                        <label class="control-label" for="Descricao">Descrição:
                        <span class="required">*</span>
                        </label>            
                        <textarea id="Descricao" name="Descricao" style="width: 100%;" class="classy-editor form-control"><?php echo $publicacao->getDescricao(); ?></textarea>                                   
                     </div>
                     <div class="form-group">  

                        <label class="control-label" for="DataEvento">Data de Publicação:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="DataEvento" name="DataEvento" class="form-control-file"value="<?php echo $publicacao->getDataEvento(); ?>" />             
                
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

  <script src="/envelhecimentoativo/vendors/sceditor/js/jquery.classyedit.js"></script>
  <link rel="stylesheet" type="text/css" href="/envelhecimentoativo/vendors/sceditor/css/jquery.classyedit.css" />

  <script src="/envelhecimentoativo/project/js/publicacoes/index.js"></script>

    <script>
        $(document).ready(function() {
            $(".classy-editor").ClassyEdit();
        });
    </script>