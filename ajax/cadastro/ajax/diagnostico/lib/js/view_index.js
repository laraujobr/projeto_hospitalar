$(document).ready(function(){    
    
    $("#cadastro_diagnostico_view_index_dialogInserir").dialog( {
        title: "Inserir diagnostico",
        autoOpen: false,
        width: 450,
        height: 300,
        buttons: [
                {
                    text: "Inserir",
                    click: function() {

                    $.ajax({
                        url: 'ajax/cadastro/ajax/controller.php',
                        data: {
                            'ajax_path': 'diagnostico',
                            'ajax_page': 'act',
                            'act': 'inserir'
                        },
                        type: 'POST',
                        success: function(data) {
                                
                            alert("diagnostico incluida com sucesso");    

                        }
                    });

                    }
                },
                {
                    text: "Cancelar",
                    click: function() {
                        $(this).dialog("close");
                    }
                }
        ]
    });
    
    $("#cadastro_diagnostico_view_index_dialogAlterar").dialog( {
        title: "Alterar diagnostico",
        autoOpen: false,
        width: 450,
        height: 300,
        buttons: [
                {
                    text: "Alterar",
                    click: function() {

                    $.ajax({
                        url: 'ajax/cadastro/ajax/controller.php',
                        data: {
                            'ajax_path': 'diagnostico',
                            'ajax_page': 'act',
                            'act': 'alterar'
                        },
                        type: 'POST',
                        success: function(data) {
                                
                            alert("diagnostico alterada com sucesso");    

                        }
                    });

                    }
                },
                {
                    text: "Cancelar",
                    click: function() {
                        $(this).dialog("close");
                    }
                }
        ]
    });
    
    
    $(".cadastro_diagnostico_view_index_indexAlterar").click(function() {
        
        var id = $(this).attr("rel");
         $.ajax({
             url: 'ajax/cadastro/ajax/controller.php',
             data: {
                 'ajax_path': 'diagnostico',
                 'ajax_page': 'dialog',
                 'dialog': 'alterar',
                 'rel': id
             },
             type: 'POST',
             success: function(data) {
                     $('#cadastro_diagnostico_view_index_dialogAlterar').html(data);
                     
             }
         });
         $("#cadastro_diagnostico_view_index_dialogAlterar").dialog("open");
         event.preventDefault();
         
         

    });
    
    $("#cadastro_diagnostico_view_index_indexInserir").click(function() {

         $.ajax({
             url: 'ajax/cadastro/ajax/controller.php',
             data: {
                 'ajax_path': 'diagnostico',
                 'ajax_page': 'dialog',
                 'case': 'dialog',
                 'dialog': 'inserir'
             },
             type: 'POST',
             success: function(data) {
                     $('#cadastro_diagnostico_view_index_dialogInserir').html(data);
                     

             }
         });
         $("#cadastro_diagnostico_view_index_dialogInserir").dialog("open");
         event.preventDefault();
         
    });
    
    
});