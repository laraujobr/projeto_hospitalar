$(document).ready(function(){    
    
    $("#cadastro_leito_view_index_dialogInserir").dialog( {
        title: "Inserir leito",
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
                            'ajax_path': 'leito',
                            'ajax_page': 'act',
                            'act': 'inserir'
                        },
                        type: 'POST',
                        success: function(data) {
                                
                            alert("leito incluida com sucesso");    

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
    
    $("#cadastro_leito_view_index_dialogAlterar").dialog( {
        title: "Alterar leito",
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
                            'ajax_path': 'leito',
                            'ajax_page': 'act',
                            'act': 'alterar'
                        },
                        type: 'POST',
                        success: function(data) {
                                
                            alert("leito alterada com sucesso");    

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
    
    
    $(".cadastro_leito_view_index_indexAlterar").click(function() {
        
        var id = $(this).attr("rel");
         $.ajax({
             url: 'ajax/cadastro/ajax/controller.php',
             data: {
                 'ajax_path': 'leito',
                 'ajax_page': 'dialog',
                 'dialog': 'alterar',
                 'rel': id
             },
             type: 'POST',
             success: function(data) {
                     $('#cadastro_leito_view_index_dialogAlterar').html(data);
                     
             }
         });
         $("#cadastro_leito_view_index_dialogAlterar").dialog("open");
         event.preventDefault();
         
         

    });
    
    $("#cadastro_leito_view_index_indexInserir").click(function() {

         $.ajax({
             url: 'ajax/cadastro/ajax/controller.php',
             data: {
                 'ajax_path': 'leito',
                 'ajax_page': 'dialog',
                 'case': 'dialog',
                 'dialog': 'inserir'
             },
             type: 'POST',
             success: function(data) {
                     $('#cadastro_leito_view_index_dialogInserir').html(data);
                     

             }
         });
         $("#cadastro_leito_view_index_dialogInserir").dialog("open");
         event.preventDefault();
         
    });
    
    
});