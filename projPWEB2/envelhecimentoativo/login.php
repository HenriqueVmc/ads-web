<?php
    $titulo = "Envelhecimento Ativo";
    require_once 'header.php';
?>

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
        <!--Parte de baixo = Cadastro de cliente-->
        <div class="col-md-12">
            <h1 class="text-center">Seja bem-vindo!</h1>
            <h3 class="text-center">Informe seu Usuário e Senha </h3>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-4">
            <form action="/envelhecimentoativo/project/controller/ValidarLogin.php" method="POST" class="form-horizontal" id="frmLogin" name="frmLogin">
                
                <div class="form-group">
                    <label for="campo-usuario">Usuário:</label>
                    <input type="text" id="Usuario" name="Usuario" class="form-control" />                    
                </div>

                <div class="form-group">
                    <label for="campo-senha">Senha:</label>
                    <input type="password" id="Senha" name="Senha" class="form-control" />
                    <input type="checkbox" id="Lembrar" name="Lembrar"/>
                    <label for="lembrar" class="form-label">Lembrar-me</label>  
                    <a class="pull-right" href="#">
                        <b>Esqueceu sua senha?</b>
                    </a>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary ml-3 btn-block" name="btnEntrar" id="btnEntrar" value="Entrar" />
                            <!-- <a href="#" class="btn btn-primary">Criar nova conta</a> -->
                        </div>
                    </div>
                </div>   
            </form>         
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script src='js/jquery-3.2.1.min.js'></script>
<script src="js/index.js"></script>
<script>
   
//    $('#btnEntrar').click(function() {
       
//        var dados = $('#frmLogin').serialize();

//        $.ajax({
//            type: 'POST',
//            url: 'http://localhost:81/envelhecimentoativo/project/controller/ValidarLogin.php',
//            data: dados,
//            success: function(response) {
           
//                if(response.success == true){
//                    window.location.replace("/envelhecimentoativo/project/view/Shared/Master.php");
//                }else{
//                    window.location.replace("/envelhecimentoativo/login.php");
//                    alert("Usuário não encontrado");
//                }
//            },
//            error: function(){
//                alert("deu riom")
//            }
//        });
//    });

</script>

<?php 

    include("footer.php");

    if(isset($_COOKIE['usuario']) && isset($_COOKIE['senha'])){
        $usuario = $_COOKIE['usuario'];
        $senha = $_COOKIE['senha'];

        echo "<script>
            document.getElementById('Usuario').value = '$usuario';
            document.getElementById('Senha').value = '$senha';
        </script>";
    }
?>