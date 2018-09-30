<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Cadastro de Usuários</h2>
            <div class="ln_solid"></div>
            <div class="x_content">
               <div class="col-md-3 col-xs-3"></div>
               <div class="col-md-6 col-sm-12 col-xs-6">
                  <form id="frmCadUsuario" method="POST" action="/gentelella/project/controller/recebeUsuario.php?act=salvar" data-parsley-validate class="form-horizontal justify-content-center">
                     <input id="Id" name="Id" type="hidden">   
                     <div class="form-group">                      
                        <label class="control-label" for="Nome">Nome:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="Nome" name="Nome" required="required" class="form-control">             
                     </div>
                     <div class="form-group">                      
                        <label class="control-label" for="Email">E-mail:
                        <span class="required">*</span>
                        </label>            
                        <input type="text" id="Email" name="Email" required="required" class="form-control">             
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-5 col-xs-5">            
                              <label class="control-label" for="Usuario">Usuário:
                              <span class="required">*</span>
                              </label>            
                              <input type="text" id="Usuario" name="Usuario" required="required" class="form-control">  
                           </div>
                           <div class="col-md-4 col-xs-4">
                              <label class="control-label" for="Senha">Senha:
                              <span class="required">*</span>
                              </label>            
                              <input type="text" id="Senha" name="Senha" required="required" class="form-control">             
                           </div>

                           <div class="col-md-3 col-xs-3">
                              <label class="control-label" for="Senha">Perfil:
                              <span class="required">*</span>
                              </label>  
                              <select id="PerfilId" name="PerfilId" class="form-control">
                                 <option>...</option>
                                 <option value="administrador">Administrador</option>
                                 <option value="profissional">Profissional</option>
                              </select>
                           </div>

                        </div>
                     </div>
                     <hr />
                     <div class="panel panel-default">
                        <h4 class="text-center">Endereço:</h4>
                        <div class="panel-body">
                           <div class="row">
                              <div class="form-group">
                                 <div class="col-md-6 col-xs-6">            
                                    <label class="control-label" for="Cep">CEP:
                                    <span class="required">*</span>
                                    </label>            
                                    <input type="text" id="Cep" name="Cep" required="required" class="form-control">  
                                 </div>
                                 <div class="col-md-6 col-xs-6">
                                    <label class="control-label" for="Rua">Rua:
                                    <span class="required">*</span>
                                    </label>            
                                    <input type="text" id="Rua" name="Rua" required="required" class="form-control">             
                                 </div>
                                 <div class="col-md-5 col-xs-5">            
                                    <label class="control-label" for="Bairro">Bairro:
                                    <span class="required">*</span>
                                    </label>            
                                    <input type="text" id="Bairro" name="Bairro" required="required" class="form-control">  
                                 </div>
                                 <div class="col-md-5 col-xs-5">
                                    <label class="control-label" for="Cidade">Cidade:
                                    <span class="required">*</span>
                                    </label>            
                                    <input type="text" id="Cidade" name="Cidade" required="required" class="form-control">             
                                 </div>
                                 <div class="col-md-2 col-xs-2">
                                    <label class="control-label" for="Uf">UF:
                                    <span class="required">*</span>
                                    </label>            
                                    <input type="text" id="Uf" name="Uf" required="required" class="form-control">             
                                 </div>
                              </div>
                           </div>
                        </div>
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

<script src="/gentelella/project/js/usuarios/index.js"></script>