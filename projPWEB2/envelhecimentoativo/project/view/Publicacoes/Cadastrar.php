<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Adicionar Publicação</h3>
            <div class="ln_solid"></div>
            <div class="x_content">
               <div class="col-md-3 col-xs-3"></div>
               <div class="col-md-6 col-sm-12 col-xs-6">
                  <form id="frmCadPublicacao" method="POST" action="/envelhecimentoativo/project/controller/recebePublicacao.php?act=salvar" data-parsley-validate class="form-horizontal justify-content-center">
                     <input id="Id" name="Id" type="hidden">   
                     <div class="form-group">                      
                        <label class="control-label" for="Assunto">Assunto:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="Assunto" name="Assunto" required="required" class="form-control">             
                     </div>

                     <div class="form-group">                      
                        <label class="control-label" for="Descricao">Descrição:
                        <span class="required">*</span>
                        </label>  
                        <textarea id="Descricao" name="Descricao" style="width: 100%;" class="classy-editor form-control"><h3 class='text-center'>Título Exemplo</h3></textarea>                                   
                     </div>
                     <div class="form-group">  

                        <label class="control-label" for="DataEvento">Data do Evento:
                        <span class="required">*</span>
                        </label>            
                        <input type="date" id="DataEvento" name="DataEvento" class="form-control-file">             
                
                    </div>
                                       
                    <div class="ln_solid"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                           <button id="" class="btn btn-success" type="submit">Publicar</button>
                           <button class="btn btn-danger" type="reset">Cancelar</button>        
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
<!-- <div class="form-group">
<div class="row">
    <div class="col-md-6 col-xs-6">            
        <label class="control-label" for="DataEnvio">Data de envio:
        <span class="required">*</span>
        </label>            
        <input type="date" id="DataEnvio" name="DataEnvio" required="required" class="form-control">  
    </div>

    <div class="col-md-6 col-xs-6">
        <label class="control-label" for="UsuarioId">Usuário:
        <span class="required">*</span>
        </label>  
        <select id="UsuarioId" name="UsuarioId" class="form-control">
            <option>...</option>
            <option value="...">Exemplo</option>
            <option value="...">Outro Exemplo</option>
        </select>
    </div>

</div> -->