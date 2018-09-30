<div class="">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <h3 class="text-center">
            Lista de Usuários</h2>
            <div class="ln_solid"></div>
            <div class="x_content">
               
               <div class="col-md-12 col-sm-12 col-xs-12">
               <table class="table table-striped responsive" id="tableUsuarios" name="tableUsuarios">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Usuário</th>
                            <th>Senha</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once 'C:\xampp\htdocs\gentelella\project\controller\Usuarios.php';

                            $obj = new UsuariosController();                           
                            $usuarios = $obj->buscarTodos();

                            foreach($usuarios as &$usuario){
                                echo "<tr>";
                                    echo "<td>";
                                        echo $usuario->getId();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $usuario->getNome();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $usuario->getEmail();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $usuario->getUsuario();
                                    echo "</td>";
                                    echo "<td>";
                                        echo $usuario->getSenha();
                                    echo "</td>";
                                    echo "<td>";
                                        echo "<a href='#' class='btn btn-success'>Editar</a>";
                                        echo "<a href='#' class='btn btn-success'>Remover</a>";
                                    echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Usuário</th>
                            <th>Senha</th>
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

