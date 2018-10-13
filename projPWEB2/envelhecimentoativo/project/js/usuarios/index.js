$(function () {
    var base_url = 'http://localhost:81/envelhecimentoativo/project/';

    // debugger;
    // $("#btnCadUsuario").click(function () {    
    //     var url = base_url+"controller/recebeUsuario.php?act=salvar";  
    //     var index = base_url+"view/Usuarios/Index.php";
    //     var dados = $("#frmCadUsuario").serialize();
    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         data: dados,
    //         success: function(data){
    //             alert("Inserido com sucesso!");

    //             //window.location = base_url+index;
    //             //ret = data;
    //         }, 
    //         error: function(par, a2, a3){
    //             alert("Erro ao Inserir!");
    //         }
    //     });   
    // });
    
    function setFrm(form) {
        $("#content").empty();
        $("#content").html(form);
    }

    $(".btnEditarUsuario").click(function () {    
         var id = $(this).data("id");
         var cod = {"id":id}
         var url = base_url+"view/Usuarios/Editar.php";  
        
         $.ajax({
             url: url,
             type: "POST",
             data: cod,
             success: function(data){
                setFrm(data);
             }, 
             error: function(par, a2, a3){
                 alert("Erro ao editar!");
             }
         });   
    });

    $(".btnRemoverUsuario").click(function () {    
        var id = $(this).data("id");
        var cod = {"id":id}
        var url = base_url+"view/Usuarios/Deletar.php";  
       
        $.ajax({
            url: url,
            type: "POST",
            data: cod,
            success: function(data){
               setFrm(data);
            }, 
            error: function(par, a2, a3){
                alert("Erro ao remover!");
            }
        });   
   });
});