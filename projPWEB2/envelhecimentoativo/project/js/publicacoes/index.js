$(function () {
    var base_url = 'http://localhost/envelhecimentoativo/project/';

    // debugger;
    // $("#btnCadPublicacao").click(function () {    
    //     var url = base_url+"controller/recebePublicacao.php?act=salvar";  
    //     var index = base_url+"view/Publicacoes/Index.php";
    //     var dados = $("#frmCadPublicacao").serialize();
    //     $.ajax({
    //         url: url,
    //         type: "POST",
    //         data: dados,
    //         success: function(data){
    //             alert("Inserido com sucesso!");

    //             window.location = base_url+index;
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

    $(".btnEditarPublicacao").click(function () {    
         var id = $(this).data("id");
         var cod = {"id":id}
         var url = base_url+"view/Publicacoes/Editar.php";  
        
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

    $(".btnRemoverPublicacao").click(function () {    
        var id = $(this).data("id");
        var cod = {"id":id}
        var url = base_url+"view/Publicacoes/Deletar.php";  
       
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

   //USAR DATAPIKER

});