<?php

    require_once 'DAO/NoticiaDAO.php';

    $msg = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $autor = $_POST['autor'];

        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $nomeArquivo = md5(time()).$extensao;
        $diretorio = "imgs_noticias/";

        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nomeArquivo);

        $noticiaDAO = new NoticiaDAO();

        $resultado = $noticiaDAO->inserirNoticia($titulo, $descricao, $autor, $nomeArquivo);

        if($resultado){
            $msg = "Notícia publicada com sucesso!";
        }
        else{
            $msg = "Erro ao publicar a notícia! Por favor tente novamente...";
        }
    }
?>


<?php
$titulo = "Envelhecimento Ativo - Nova Notícia";
require_once 'header.php';
require_once 'nav-padrao.php';
?>

<?php if ($msg != false): ?>
    <script type="text/javascript">
        window.onload = function() {
            alert("<?= $msg ?>");
        }
    </script>
<?php endif; ?>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                if ($phone == true) :
                    echo '<h3>Nova Notícia</h3>';
                else :
                    echo '<h2>Nova Notícia</h2>';
                endif;
                ?>
                <br>
                <br>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-sm">
                    <form class="form-horizontal" action="novaNoticia.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <!-- Titulo -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="titulo">Título</label>
                                <div class="col-md-9">
                                    <input id="titulo" name="titulo" type="text" placeholder="Título da Notícia" class="form-control" maxlength="80" required>
                                </div>
                            </div>
                            <!-- Descricao -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="descricao">Descrição</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da notícia aqui..." rows="5" maxlength="500" required></textarea>
                                </div>
                            </div>
                            <!-- Autor -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="autor">Autor</label>
                                <div class="col-md-9">
                                    <input id="autor" name="autor" type="text" placeholder="Autor da Notícia" class="form-control" maxlength="50" required>
                                </div>
                            </div>
                            <!-- Imagem -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="imagem">Imagem</label>
                                <div class="col-md-9">
                                    <input id="imagem" name="imagem" type="file" placeholder="Imagem da Notícia" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Publicar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once 'footer.php';
?>
