<?php
    $titulo = "Envelhecimento Ativo - O Programa";
    require_once 'header.php';
?>

<!-- Navigation -->
<?php include_once 'nav-padrao.php'; ?>

<!-- Conteudo -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
                <section id="topoPrograma">
                    <?php
                    if ($phone == true) :
                        echo '<h3 id="topoPrograma" class="text-center">O Programa</h3>';
                    else :
                        echo '<h2 id="topoPrograma" class="text-center">O Programa</h2>';
                    endif;
                    ?>
                    <br>
                    <br>
                    <p class="letraModalOjetivo" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        A Universidade Estadual de Londrina (UEL), em conson&acirc;ncia
                        com as demandas sociais atuais, vem ao longo da sua
                        exist&ecirc;ncia desenvolvendo importantes a&ccedil;&otilde;es
                        na &aacute;rea da sa&uacute;de do idoso. Particularmente na
                        Educa&ccedil;&atilde;o F&iacute;sica, projetos voltados ao
                        contexto do envelhecimento s&atilde;o realizados h&aacute; pelo
                        menos 15 anos. Atualmente, no Centro de Educa&ccedil;&atilde;o
                        F&iacute;sica e Esporte da UEL (CEFE) est&aacute; em
                        funcionamento o programa de extens&atilde;o Envelhecimento
                        Ativo.
                    </p>
                    <p class="letraModalOjetivo" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        O presente programa tem a dura&ccedil;&atilde;o de 4 anos
                        subdivididos em duas etapas de dois anos. A primeira iniciou-se
                        em 2015 com o objetivo principal de atender &agrave;
                        popula&ccedil;&atilde;o idosa por meio de programas de
                        exerc&iacute;cios resistidos e a segunda iniciou-se em 2017 com
                        t&eacute;rmino previsto no final de 2018. O Programa &eacute;
                        financiado pelo Programa de Extens&atilde;o Universit&aacute;ria
                        (PROEXT) do Minist&eacute;rio da Educa&ccedil;&atilde;o e
                        Cultura (MEC).
                    </p>
                    <p class="letraModalOjetivo" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        O Programa Envelhecimento Ativo - Etapa II busca ampliar as
                        a&ccedil;&otilde;es realizadas nos dois primeiros anos do
                        programa, aumentando o n&uacute;mero de atendimentos, ofertando
                        diferentes modalidades de exerc&iacute;cios, programas de
                        educa&ccedil;&atilde;o em sa&uacute;de e
                        orienta&ccedil;&otilde;es para a preven&ccedil;&atilde;o de
                        quedas. Al&eacute;m dessas a&ccedil;&otilde;es, o Programa visa
                        tamb&eacute;m desenvolver pesquisas e propiciar campos de
                        est&aacute;gio para alunos de gradua&ccedil;&atilde;o e
                        p&oacute;s-gradua&ccedil;&atilde;o e capacitar e/ou atualizar
                        profissionais e futuros profissionais para o trabalho com a
                        popula&ccedil;&atilde;o idosa.
                    </p>
                    <br>
                    <h3>Objetivos</h3>
                    <br>
                    <h4>Geral:</h4>
                    <br>
                    <ul>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Proporcionar &agrave; popula&ccedil;&atilde;o idosa melhor qualidade de
                                vida por meio de interven&ccedil;&otilde;es que visam a
                                educa&ccedil;&atilde;o em sa&uacute;de, preven&ccedil;&atilde;o de quedas e a pr&aacute;tica regular
                                de exerc&iacute;cios f&iacute;sicos de diferentes modalidades.
                            </p>
                        </li>
                    </ul>
                    <br>
                    <?php
                    if ($phone == true) :
                        echo '<h3>Espec&iacute;ficos</h3>';
                    else :
                        echo '<h4>Espec&iacute;ficos</h4>';
                    endif;
                    ?>
                    <br>
                    <ul class="letraModalOjetivo">
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Capacitar profissionais de educa&ccedil;&atilde;o f&iacute;sica para
                                desenvolverem programas de exerc&iacute;cios f&iacute;sicos
                                comunit&aacute;rios para idosos.
                            </p>
                        </li>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Qualificar alunos dos cursos de gradua&ccedil;&atilde;o e de
                                p&oacute;s-gradua&ccedil;&atilde;o em educa&ccedil;&atilde;o
                                f&iacute;sica e demais &aacute;reas da Sa&uacute;de para
                                trabalharem com educa&ccedil;&atilde;o em sa&uacute;de,
                                preven&ccedil;&atilde;o de quedas e a planejar e aplicar
                                programas de exerc&iacute;cios f&iacute;sicos
                                comunit&aacute;rios para a popula&ccedil;&atilde;o idosa.
                            </p>
                        </li>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Manter ou melhorar a capacidade de reserva funcional dos idosos,
                                evitando estados de fragilidade f&iacute;sica.
                            </p>
                        </li>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Proporcionar aos idosos o bem-estar psicol&oacute;gico por meio de
                                reuni&otilde;es, palestras e da pr&aacute;tica
                                exerc&iacute;cios f&iacute;sicos em grupo.
                            </p>
                        </li>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Desenvolver nos idosos a conscientiza&ccedil;&atilde;o para uma vida
                                saud&aacute;vel, para a pr&aacute;tica de
                                atividade/exerc&iacute;cio f&iacute;sico e a adotar atitudes
                                para prevenir quedas.
                            </p>
                        </li>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Empoderar o idoso por meio de estrat&eacute;gias que propiciam o aumento
                                da auto efic&aacute;cia para a pr&aacute;tica de atividade
                                f&iacute;sica.
                            </p>
                        </li>
                        <li>
                            <p class="letraModalOjetivo" style="text-align: justify;">
                                Dar suporte &agrave;s pesquisas realizadas com a
                                popula&ccedil;&atilde;o idosa pela comunidade acad&ecirc;mica
                                do CEFE/UEL.
                            </p>
                        </li>
                    </ul>
                    <?php
                    if ($phone == true) :
                        echo '<h4>A&ccedil;&otilde;es do Programa</h4>';
                    else :
                        echo '<h3>A&ccedil;&otilde;es do Programa</h3>';
                    endif;
                    ?>
                    <br>
                    <p class="letraModalOjetivo" style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        As a&ccedil;&otilde;es do Programa Envelhecimento Ativo - Etapa II
                        s&atilde;o desenvolvidas nos munic&iacute;pios de Londrina,
                        Ibipor&atilde;, Camb&eacute;, Rol&acirc;ndia e Apucarana com
                        conv&ecirc;nios realizados com as secretarias de sa&uacute;de e
                        esporte dos referidos munic&iacute;pios. O Programa
                        atuar&aacute; em tr&ecirc;s a&ccedil;&otilde;es principais: 1)
                        Capacita&ccedil;&atilde;o de profissionais, 2)
                        Educa&ccedil;&atilde;o em Sa&uacute;de e preven&ccedil;&atilde;o
                        de quedas e 3) aplica&ccedil;&atilde;o de diferentes programas
                        de exerc&iacute;cios f&iacute;sicos.
                    </p>
                    <ol class="letraModalOjetivo">
                        <li style="text-align: justify;">
                            Capacita&ccedil;&atilde;o de profissionais e dissemina&ccedil;&atilde;o das
                            a&ccedil;&otilde;es na comunidade: Ser&aacute; oferecido um
                            programa de forma&ccedil;&atilde;o continuada para
                            profissionais de educa&ccedil;&atilde;o f&iacute;sica e
                            fisioterapia em oito m&oacute;dulos e um simp&oacute;sio, com
                            objetivo de capacit&aacute;-los para implantar e aplicar um
                            programa de exerc&iacute;cios f&iacute;sicos desenvolvido
                            especificamente para o Programa. Participar&atilde;o
                            profissionais vinculados aos NASFs (N&uacute;cleo de apoio
                            &agrave;Â  sa&uacute;de da fam&iacute;lia) dos
                            munic&iacute;pios de Londrina, Ibipor&atilde;, Camb&eacute;,
                            Rol&acirc;ndia e Apucarana. Ap&oacute;s &agrave;Â 
                            capacita&ccedil;&atilde;o os profissionais disseminar&atilde;o
                            o programa de exerc&iacute;cios a grupos de idosos vinculados
                            &agrave; UBSs (Unidades B&aacute;sicas de Sa&uacute;de), as
                            quais atuam.
                        </li>
                        <br>
                        <li style="text-align: justify;">
                            Educa&ccedil;&atilde;o em Sa&uacute;de e Preven&ccedil;&atilde;o de Quedas: Nessa etapa a
                            equipe do Programa ir&aacute; percorrer os grupos de idosos e
                            propor reuni&otilde;es comunit&aacute;rias nos
                            munic&iacute;pios participantes, com objetivos de desenvolver
                            a&ccedil;&otilde;es voltadas aÂ  educa&ccedil;&atilde;o em
                            sa&uacute;de, preven&ccedil;&atilde;o de quedas e aumento no
                            n&iacute;vel de atividade f&iacute;sica habitual. Essas
                            atividades ser&atilde;o realizadas por meio de palestras e
                            din&acirc;micas de grupo. Os idosos receber&atilde;o
                            tamb&eacute;m uma cartilha com informa&ccedil;&otilde;es sobre
                            como adotar h&aacute;bitos mais saud&aacute;veis, prevenir
                            quedas e se tornar fisicamente mais ativo.
                        </li>
                        <br>
                        <li style="text-align: justify;">
                            Aplica&ccedil;&atilde;o de diferentes programas de exerc&iacute;cios f&iacute;sicos: Nesta
                            etapa ser&atilde;o oferecidos diferentes programas de
                            exerc&iacute;cios f&iacute;sicos para idosos como
                            hidrogin&aacute;stica, exerc&iacute;cios funcionais,
                            dan&ccedil;a, treinamento resistido e para habilidades motoras.
                            As interven&ccedil;&otilde;es ser&atilde;o realizadas no Centro
                            de Educa&ccedil;&atilde;o F&iacute;sica e Esporte da UEL
                            (CEFE-UEL).
                        </li>
                    </ol>
                </section>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3>
                            <a href="#page-top" onmouseout="class:'linkEquipe1'" class="linkEquipe1"><span class="btn btn-primary ">Voltar ao topo</span></a>
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
