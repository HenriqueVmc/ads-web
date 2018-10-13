<?php
    $titulo = "Envelhecimento Ativo";
    require_once 'header.php';
?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <!-- <div class="logo"><img src="img/logo.png" class="img-responsive" alt="Home" width="50px" height="50px"></div> -->
            <a class="navbar-brand" href="#page-top">Envelhecimento Ativo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($phone == true) :
                    echo '<li class="hidden"><a href="#page-top"></a></li>
                          <li class="page-scroll"><a href="#contact">Contato</a></li>
                          <li class="page-scroll"><a href="#contact">Contato</a></li>';
                else :
                    echo '<li class="hidden"><a href="#page-top"></a></li>
                          <li class="page-scroll"><a href="#portfolio">O Programa</a></li>
                          <li class="page-scroll"><a href="#contact">Contato</a></li> 
                          <li class="page-scroll"><a href="/envelhecimentoativo/login.php">Entrar</a></li>';
                endif;
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<?php
    if ($phone == true) :
    else :
        echo '<header>
                <div class="container">
                    <div class="content quadro"> 
                        <h1>Envelhecimento Ativo</h1>
                        <h3>Conheça esse programa</h3>
                    </div>
                </div>
               </header>';
    endif;
?>

    <!-- NOTICIAS -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <?php
                    if ($phone == true) :
                        echo '<h3>Notícias</h3>';
                    else :
                        echo '<h2>Notícias</h2>';
                    endif;
                    ?>
                </div>
            </div>

            <div class="regular slider">
                <!-- Exemplo 01-->
                <div>
                    <div class="portfolio-item tam-img">
                        <a href="#" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <h3 class="col-md-12 text-center">EXEMPLO 01</h3>
                                </div>
                            </div>
                            <img src="img/slider/01.jpg" alt="Um" class="tam-img">
                        </a>
                    </div>
                </div>
                <!-- Exemplo 02-->
                <div>
                    <div class="portfolio-item tam-img">
                        <a href="#" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <h3 class="col-md-12 text-center">EXEMPLO 02</h3>
                                </div>
                            </div>
                            <img src="img/slider/02.jpg" alt="Um" class="tam-img">
                        </a>
                    </div>
                </div>
                <!-- Exemplo 03-->
                <div>
                    <div class="portfolio-item tam-img">
                        <a href="#" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <h3 class="col-md-12 text-center">EXEMPLO 03</h3>
                                </div>
                            </div>
                            <img src="img/slider/03.png" alt="Um" class="tam-img">
                        </a>
                    </div>
                </div>
                <!-- Exemplo 04-->
                <div>
                    <div class="portfolio-item tam-img">
                        <a href="#" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <h3 class="col-md-12 text-center">EXEMPLO 04</h3>
                                </div>
                            </div>
                            <img src="img/slider/04.jpg" alt="Um" class="tam-img">
                        </a>
                    </div>
                </div>
                <!-- Exemplo 05-->
                <div>
                    <div class="portfolio-item tam-img">
                        <a href="#" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <h3 class="col-md-12 text-center">EXEMPLO 05</h3>
                                </div>
                            </div>
                            <img src="img/slider/05.jpg" alt="Um" class="tam-img">
                        </a>
                    </div>
                </div>

            </div>
            <a href="noticias.php" class="btn btn-success pull-right btn-block"> VER TODAS</a>
        </div> <!-- container -->        
    </section> <!-- NOTICIAS -->

<!-- Portfolio -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                    if ($phone == true) :
                        echo '<h3>O Programa</h3>';
                    else :
                        echo '<h2>O Programa</h2>';
                    endif;
                ?>
                <br>
                <br>
            </div>
        </div>

        <div class="row">
            <!-- Este abre os objetivos -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./page-programa.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/imgMenu/programa.png" class="img-responsive" alt="O programa">
                </a>
            </div>

            <!-- Este abre a equipe -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./page-equipe.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/imgMenu/equipe.png" class="img-responsive" alt="Equipe do programa" id='equipe'>
                </a>
            </div>

            <!-- Este link vai para o inicio idoso -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./page-galeria.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/imgMenu/galeria.png" class="img-responsive" alt="Galeria">
                </a>
            </div>

            <!--  este link vai para os profissionais -->
            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./page-depoimentos.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/imgMenu/depoimento.png" class="img-responsive" alt="Depoimentos">
                </a>
            </div>


            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item">
                <a href="./profissional-inicio.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div> <img src="img/imgMenu/profissional.png" class="img-responsive" alt="Area profissional">
                </a>
            </div>


            <div class="col-xs-6 col-sm-6 col-md-4  portfolio-item">
                <a href="./idoso-inicio.php" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/imgMenu/idoso.png" class="img-responsive" alt="Area de idosos">
                </a>
            </div>

        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- portifolio -->


<!--Contato-->
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="cont-contactBtn">
                    <div class="cont-flip">
                        <div class="front">
                            <a href="#" class="btnn btn-white flip" id="sub">Contate-nos</a>
                        </div>
                        <div class="back">
                            <a href="#" class="flip close"></a>
                            <form class="contact-form" id="contactForm" novalidate>
                                <input class="gutter" type="text" placeholder="Nome" id="name" required data-validation-required-message="Informe seu nome.">
                                <p class="help-block text-danger"></p>

                                <input class="gutter" type="tel" placeholder="Telefone" id="phone" required data-validation-required-message="Informe seu telefone.">
                                <p class="help-block text-danger"></p>

                                <input type="email" placeholder="E-mail" id="email" required data-validation-required-message="Informe seu e-mail.">
                                <p class="help-block text-danger"></p>

                                <textarea name="" id="" placeholder="Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>

                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>

            <script src='js/jquery-3.2.1.min.js'></script>
            <script src="js/index.js"></script>

            </div> <!-- row -->
        </div> <!-- container -->
    <br>
    <br>
</section> <!-- contact -->

<!--  incluindo o rodapÃ© atravez do include php -->
<?php include("footer.php") ?>