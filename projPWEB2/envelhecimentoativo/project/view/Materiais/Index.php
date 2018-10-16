<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Lista de Materiais</h2>
            <div class="ln_solid"></div>
            <div class="x_content">
               
               <div class="col-md-12 col-sm-12 col-xs-12">
               <table class="table table-striped responsive" id="tableMateriais" name="tableMateriais">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Data de Envio</th>
                            <th>Arquivo</th>
                            <?php 
                                session_start(); 
                                if($_SESSION['perfilId'] != 3){ echo '<th>Ações</th>'; } 
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //include_once '/envelhecimentoativo/project/controller/Materiais.php';
                            include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Materiais.php';
                            
                            $obj = new MateriaisController();                           
                            $materiais = $obj->buscarTodos();                                                    
                            
                           foreach($materiais as $material){
                                $arquivo = $material->getArquivo();
                                $nomeArquivo = str_replace("/envelhecimentoativo/uploads/", "", $arquivo);
                                
                                echo "<tr>";
                                    echo "<td>";
                                        echo $material->getId();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $material->getNome();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $material->getDescricao();
                                    echo "</td>";
                                    echo "<td>";
                                        echo date("d/m/Y", strtotime($material->getDataEnvio()));                                                                            
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<a href='".$arquivo."' download>".$nomeArquivo."</a>";                    
                                    echo "</td>";

                                    if($_SESSION['perfilId'] != 3){                              
                                        echo "<td>";
                                            echo "<a href='#' data-id='".$material->getId()."' class='btn btn-success btnEditarMaterial'>Editar</a>";
                                            echo "<a href='#' data-id='".$material->getId()."' class='btn btn-danger btnRemoverMaterial'>Remover</a>";
                                        echo "</td>";
                                    }
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descricao</th>
                            <th>Data de Envio</th>
                            <th>Arquivo</th>
                            <?php 
                                if($_SESSION['perfilId'] != 3){ echo '<th>Ações</th>'; } 
                            ?>
                        </tr>
                    </tfoot>
               </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="/envelhecimentoativo/project/js/materiais/index.js"></script>
<script src="/envelhecimentoativo/project/js/materiais/table.js"></script>

