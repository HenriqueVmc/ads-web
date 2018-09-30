$(function () {
    var base_url = 'http://localhost:81/gentelella/project/';
    
    $("#menuCadUsuario").click(function () {
        getFrm(base_url+"view/Usuarios/Cadastrar.php");
        //setFrm(cadUsuario);   
    });

    $("#menuConsultarUsuarios").click(function () {
        getFrm(base_url+"view/Usuarios/Index.php");
        //setFrm(cadUsuario);   
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
        $("#content").html(form);
    }
});