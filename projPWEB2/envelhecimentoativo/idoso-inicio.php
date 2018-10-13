<?php
    $titulo = "Envelhecimento Ativo - Idosos";
    require_once 'header.php';
?>

<!-- Navigation -->
<?php include_once 'nav-idoso.php' ?>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                if ($phone == true) :
                    echo '<h3>Área do Idoso</h3>';
                else :
                    echo '<h2>Área do Idoso</h2>';
                endif;
                ?>
                <br>
                <br>
            </div>
        </div>

        <div class="row">

            <!-- Dicas de Saude -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./idoso-dicas-saude.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/dicas-saude.png" class="img-responsive" alt="Dicas de Saúde">
                </a>
            </div>

            <!-- Estilo de Vida -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./idoso-estilo-vida.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/estilo-vida.png" class="img-responsive" alt="Estilo de Vida">
                </a>
            </div>

            <!-- Prevencao -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./idoso-prevencao.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/prevencao-quedas.png" class="img-responsive" alt="Prevenção de Quedas">
                </a>
            </div>

            <!-- Exercicios -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./idoso-exercicios.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/exercicios.png" class="img-responsive" alt="Exercícios">
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top"><i class="fa fa-chevron-up"></i>
    </a>
</div>

<?php include("footer.php") ?>
