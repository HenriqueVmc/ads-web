$(function () {
    var base_url = 'http://localhost:81/gentelella/project/';

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
    
    $("#btnEditarUsuario").click(function () {    
         $id = $(this).data("id");
         
         var url = base_url+"controller/recebeUsuario.php?act=editar";  
         var index = base_url+"view/Usuarios/Index.php";
         
         $.ajax({
             url: url,
             type: "POST",
             data: dados,
             success: function(data){
                 alert("Inserido com sucesso!");
                //window.location = base_url+index;
                 //ret = data;
             }, 
             error: function(par, a2, a3){
                 alert("Erro ao Inserir!");
             }
         });   
    });
})