$(function () {
    var base_url = 'http://localhost:81/gentelella/project/';

    debugger;
    $("#btnCadUsuario").click(function () {    
        var url = base_url+"controller/recebeUsuario.php";  
        var index = base_url+"view/Usuarios/Index.php";
        var dados = $("#frmCadUsuario").serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: dados,
            success: function(data){
                alert("Inserido!");
                //ret = data;
            }, 
            error: function(par, a2, a3){
                alert("Erro ao Inserir!");
            }
        });   
    });
});