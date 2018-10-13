<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Lista de Publicações</h2>
            <div class="ln_solid"></div>
            <div class="x_content">
               
               <div class="col-md-12 col-sm-12 col-xs-12">
               <table class="table table-striped responsive" id="tablePublicacoes" name="tablePublicacoes">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Assunto</th>
                            <th>Data de Publicações</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';
                            
                            $obj = new PublicacoesController();                           
                            $publicacoes = $obj->buscarTodos();                                                    
                            
                           foreach($publicacoes as $publicacao){
                                echo "<tr>";
                                    echo "<td>";
                                        echo $publicacao->getId();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $publicacao->getAssunto();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $publicacao->getDataPublicacao();
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<a href='#' data-id='".$publicacao->getId()."' class='btn btn-success btnEditarPublicacao'>Editar</a>";
                                        echo "<a href='#' data-id='".$publicacao->getId()."' class='btn btn-danger btnRemoverPublicacao'>Remover</a>";
                                    echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Assunto</th>
                            <th>Data de Publicação</th>                            
                            <th>Ações</th>
                        </tr>
                    </tfoot>
               </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="/envelhecimentoativo/project/js/publicacoes/index.js"></script>
<script src="/envelhecimentoativo/project/js/publicacoes/table.js"></script>

