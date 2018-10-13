<?php
    $titulo = "Envelhecimento Ativo";
    require_once 'header.php';

    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';
   
    $obj = new PublicacoesController();                           
    $publicacoes = $obj->buscarTodos();   

//   include_once 'C:\xampp\htdocs\envelhecimentoativo\project\controller\Publicacoes.php';

//   if(isset($_GET['Id'])){      
        
//      $id = $_GET['Id'];
//      $obj = new PublicacoesController();    
                            
//      $publicacao = $obj->buscarPorId($id);
//   }
?>
<style>
    .morecontent span {
        display: none;
    }
    .morelink {
        display: block;
    }
</style>
<div class="row">
   <!-- Navigation -->
   <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <!-- <div class="logo"><img src="img/logo.png" class="img-responsive" alt="Home" width="50px" height="50px"></div> -->
            <a class="navbar-brand" href="/envelhecimentoativo">Envelhecimento Ativo</a>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
   </nav>
</div>
<br><br><br>
<div class="container">
   <div class="row">
      <div class="col-md-2"></div>      
      <!-- Blog -->
      <div class="col-md-8">
        <h1 class="title text-center">Notícias <span class="fa fa-bell"></span></h1>
        <hr />
        <?php
            $cont = 0;           
            
            if($publicacoes != null){
                foreach($publicacoes as $publicacao){

                    $dataEvento = $publicacao->getDataEvento();
                    $dataPublicacao = $publicacao->getDataPublicacao();
                    
                    echo '<div class="panel panel-success">';

                        echo '<div class="panel-heading">';   

                            echo '<p class="my-4">';
                                echo "<b>Assunto: </b>".$publicacao->getAssunto();
                                if($dataEvento != '0000-00-00'){                                                                                                      
                                    echo "<span class='pull-right'>Data do evento:  ".date("d/m/Y", strtotime($dataEvento))."</span>";
                                }
                            echo '</p>';                
                            
                        echo '</div>';
                
                        echo '<div class="card mb-4">';
                            echo '<div class="panel-body">';
                                echo '<div class="card-body" id="more-'.$cont.'">';                                                
                                    $descricao = $publicacao->getDescricao();
                                    $mostrar = str_replace('<div>', '<p>', $descricao);                                
                                    $mostrar = str_replace('</div>', '</p>', $mostrar); 
                                    echo $mostrar;                                                                                        
                                echo '</div>';                                                        
                                echo '<a href="#" data-id="'.$cont.'" class="VerMais btn btn-primary">Ver Mais</a>';                                                              
                            echo '</div>'; 
                            echo '<div class="card-footer text-muted pull-right">';
                                    echo "<i>publicado em:  ".date("d/m/Y", strtotime($dataPublicacao))."</i>";
                                echo '</div>';                            
                        echo '</div>';

                    echo '</div> <hr />';
                    $cont++;
                }
            }else{
                echo "<br><br><br><h4 class='text-center'>Ops! Não há publicações...<span class='fa fa-frownsad-tear'></span></h4><br>";
            }
        ?>  

      </div>
      <!-- Fim Blog-->

      <div class="col-md-2"></div>
   </div>
</div>
<?php include("footer.php"); ?>
<script>
$(document).ready(function() {
    $(".card-body").slideUp();
    
    $(".VerMais").click(function() {
        var id = $(this).data('id');
        var elem = $(this).text();
        var more = "#more-"+id;

        if (elem == "Ver Mais") {
        //Stuff to do when btn is in the read more state
        $(this).text("Ver Menos");
            $(more).slideDown();
        } else {
        //Stuff to do when btn is in the read less state
        $(this).text("Ver Mais");
            $(more).slideUp();
        }
    });
});
</script>