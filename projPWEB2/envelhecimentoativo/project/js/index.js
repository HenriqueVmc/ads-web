$(function () {
    var base_url = 'http://localhost:81/envelhecimentoativo/project/';
    
    $("#menuCadUsuario").click(function () {
        getFrm(base_url+"view/Usuarios/Cadastrar.php");
        //setFrm(cadUsuario);   
    });

    $("#menuConsultarUsuarios").click(function () {
        getFrm(base_url+"view/Usuarios/Index.php");
        //setFrm(cadUsuario);   
    });

    $("#menuCadMateriais").click(function () {
        getFrm(base_url+"view/Materiais/Cadastrar.php");
    });

    $("#menuConsultarMateriais").click(function () {
        getFrm(base_url+"view/Materiais/Index.php");  
    });

    $("#menuCadPublicacoes").click(function () {
        getFrm(base_url+"view/Publicacoes/Cadastrar.php");
    });

    $("#menuConsultarPublicacoes").click(function () {
        getFrm(base_url+"view/Publicacoes/Index.php");  
    });

    function getFrm(url) {
        //var ret = null;

        $.ajax({
            url: url,
            type: "GET",
            dataType: "text",
            success: function(data){
                setFrm(data);
                //ret = data;
            }, 
            error: function(par, a2, a3){
                
            }
        });   
        //return ret;
    }
    
    function setFrm(form) {
        $("#content").empty();
        $("#content").html(form);
    }
});