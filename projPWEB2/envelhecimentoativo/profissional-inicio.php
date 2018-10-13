<?php
    $titulo = "Envelhecimento Ativo - Profissionais";
    require_once 'header.php';
?>

<!-- Navigation -->
<?php include_once 'nav-profissional.php'?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                if ($phone == true) :
                    echo '<h3>Área do Profissional</h3>';
                else :
                    echo '<h2>Área do Profissional</h2>';
                endif;
                ?>
                <br>
                <br>
            </div>
        </div>


        <div class="row">

            <!-- Avaliações e Testes  -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./profissional-testes.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="./img/portfolio/avaliacoes.png" class="img-responsive" alt="Avaliações e Testes">
                </a>
            </div>

            <!-- Vídeos  -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./profissional-videos.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="./img/portfolio/videos.png" class="img-responsive" alt="Vídeos">
                </a>
            </div>

            <!-- Capacitação Profissional  -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./profissional-capacitacao.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="./img/portfolio/capacitacao.png" class="img-responsive" alt="Capacitação Profissional">
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<?php include("footer.php") ?>