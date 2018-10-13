<?php
$titulo = "Envelhecimento Ativo - O Programa";
require_once 'header.php';
?>


<!-- Navigation -->
<?php include_once 'nav-padrao.php'?>

<!-- Conteudo -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
                <section id="topoEquipesTrabalho">
                    <?php
                    if ($phone == true) :
                        echo '<h3 class="text-center">Equipes de Trabalho</h3>';
                    else :
                        echo '<h2 class="text-center">Equipes de Trabalho</h2>';
                    endif;
                    ?>
                    <br>
                    <br>
                    <h4 class="letraModalOjetivo recuo">Instituições</h4>
                    <p class="letraModalOjetivo recuo">
                        Universidade Estadual de Londrina <sup>1</sup> <br>
                        Universidade Norte do Paran&aacute; <sup>2</sup> <br>
                        Instituto Federal de Santa Catarina - C&acirc;mpus de Gaspar <sup>3</sup> <br>
                        Universidade Estadual do Norte do Paran&aacute; <sup>4</sup> <br>
                        Prefeitura Municipal de Londrina <sup>5</sup> <br>
                        Irmandade Santa Casa de Londrina <sup>6</sup> <br>
                    </p>
                    <br>
                    <h4 class="letraModalOjetivo recuo">Coordenador</h4>
                    <p class="letraModalOjetivo recuo">
                        Dr. Denilson de Castro Teixeira - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                    </p>
                    <h4 class="letraModalOjetivo recuo">Docentes Colaboradores</h4>
                    <p class="letraModalOjetivo recuo">
                        Dra. Audrey de Souza Marquez - Farm&aacute;cia <sup>2</sup> <br>
                        Dra. Celita Salmaso Trelha - Fisioterapia <sup>1</sup> <br>
                        Ms. Dalva Martins Rosa - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dr. Edilson Serpeloni Cyrino - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dr. Enio Vaz Ronque - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dra. Fernanda Cristiane de Melo - Fisioterapia <sup>1</sup> <br>
                        Dra. Juliana Bayeux Dascal - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dra. Karen Barros Parron Fernandes <sup>2,6</sup> <br>
                        Dra. Mara Solange Dellaroza - Enfermagem <sup>1</sup> <br>
                        Dra. M&aacute;rcia Marques Dib - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dr. Marcelo Romanzini - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dr. Marcos Aparecido Sarria Cabrera - Medicina <sup>1</sup> <br>
                        Dr. Ronaldo Jos&eacute; Nascimento - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        Dr. Rubens Alexandre da Silva Junior - Fisioterapia <sup>2</sup> <br>
                    </p>
                    <h4 class="letraModalOjetivo recuo">Alunos de doutorado</h4>
                    <p class="letraModalOjetivo recuo">
                        Anderson da Silva Honorato - Educa&ccedil;&atilde;o F&iacute;sica <sup>1,3</sup> <br>
                        Andr&eacute; Wilson de Oliveira Gil - Fisioterapia <sup>1,2</sup> <br>
                        Camila Pereira - Fisioterapia <sup>1,4</sup> <br>
                        Fabiana Scherer - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                        J&eacute;ssica Bazoni - Educa&ccedil;&atilde;o F&iacute;sica <sup>2</sup> <br>
                        M&aacute;rio Molari - Educa&ccedil;&atilde;o F&iacute;sica<sup>1,2</sup> <br>
                        Sandra Aires Ferreira - Educa&ccedil;&atilde;o F&iacute;sica<sup>1</sup> <br>
                        Silvana Cardoso de Souza - Educa&ccedil;&atilde;o F&iacute;sica <sup>1</sup> <br>
                    </p>
                    <h4 class="letraModalOjetivo recuo">Profissionais colaboradores</h4>
                    <p class="letraModalOjetivo recuo">
                        Analigia Rivelini - Educa&ccedil;&atilde;o F&iacute;sica <sup>4</sup> <br>
                        Bruna Prado - Fisioterapia <sup>4</sup> <br>
                        H&eacute;lio Sanches Junior - Educa&ccedil;&atilde;o F&iacute;sica <sup>5</sup> <br>
                        Leandro Poli da Palma - Educa&ccedil;&atilde;o F&iacute;sica <sup>5</sup> <br>
                        Nat&aacute;lia Serra Lovato - Educa&ccedil;&atilde;o F&iacute;sica <sup>5</sup> <br>
                        Simone Carneiro Gomes - Educa&ccedil;&atilde;o F&iacute;sica <sup>2</sup> <br>
                        Walqu&iacute;ria Batista de Andrade - Educa&ccedil;&atilde;o F&iacute;sica <sup>2</sup> <br>
                    </p>
                    <h3 class="letraModalOjetivo recuo">Alunos de Gradua&ccedil;&atilde;o</h3>
                    <p class="letraModalOjetivo recuo">
                        Jefferson Mendon&ccedil;a Cassemiro <sup>1</sup> <br>
                    </p>
                </section>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3>
                            <a href="#page-top" onmouseout="class:'linkEquipe1'" class="linkEquipe1"><span class="btn btn-primary">Voltar ao topo</span></a>
                            <br>
                            <br>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rodape -->
<?php include("footer.php") ?>
