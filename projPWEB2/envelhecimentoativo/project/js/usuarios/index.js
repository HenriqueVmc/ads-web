$(function () {
    var base_url = 'http://localhost/envelhecimentoativo/project/';

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

   $("#PerfilId").on('change', function() {
       debugger;
        if($(this).val() == "2" || $(this).val() == "Profissional"){
            $("#frmProfissional").html("<div class='form-group'>"+
                                            "<h4 class='text-center'>Dados profissionais</h4>"+
                                            "<div class='col-md-12 col-xs-12'>"+
                                                "<label class='control-label' for='Curso'>Curso:<span class='required'>*</span></label>"+
                                                "<input type='text' id='Curso' name='Curso' required='required' class='form-control >"+
                                            "</div>"+
                                            "<div class='col-md-6 col-xs-6'>"+
                                                "<label class='control-label' for='Instituicao'>Instituição:<span class='required'>*</span></label>"+
                                                "<input type='text' id='Instituicao' name='Instituicao' required='required' class='form-control'>"+
                                            "</div>"+
                                        "</div><br />"
            );
        }else{
            $("#frmProfissional").html("");
        }
   });
});