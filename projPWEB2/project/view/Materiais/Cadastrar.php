<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Cadastro de Materiais</h2>
            <div class="ln_solid"></div>
            <div class="x_content">
               <div class="col-md-3 col-xs-3"></div>
               <div class="col-md-6 col-sm-12 col-xs-6">
                  <form id="frmCadMaterial" method="POST" action="/gentelella/project/controller/recebeMaterial.php?act=salvar" data-parsley-validate class="form-horizontal justify-content-center">
                     <input id="Id" name="Id" type="hidden">   
                     <div class="form-group">                      
                        <label class="control-label" for="Nome">Nome:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="Nome" name="Nome" required="required" class="form-control">             
                     </div>

                     <div class="form-group">                      
                        <label class="control-label" for="Descricao">Descrição:
                        <span class="required">*</span>
                        </label>            
                        <textarea rows="4" id="Descricao" name="Descricao" required="required" class="form-control"> </textarea>             
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
                           <button id="" class="btn btn-success" type="submit">Cadastrar</button>
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

<script src="/gentelella/project/js/materiais/index.js"></script>

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