$(function () {
    var base_url = 'http://localhost/envelhecimentoativo/project/';

    // debugger;
    // $("#btnCadMaterial").click(function () {    
    //     var url = base_url+"controller/recebeMaterial.php?act=salvar";  
    //     var index = base_url+"view/Materiais/Index.php";
    //     var dados = $("#frmCadMaterial").serialize();
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

    $(".btnEditarMaterial").click(function () {    
         var id = $(this).data("id");
         var cod = {"id":id}
         var url = base_url+"view/Materiais/Editar.php";  
        
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

    $(".btnRemoverMaterial").click(function () {    
        var id = $(this).data("id");
        var cod = {"id":id}
        var url = base_url+"view/Materiais/Deletar.php";  
       
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