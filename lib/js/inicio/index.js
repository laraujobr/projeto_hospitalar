$(document).ready(function(){
        
    $.ajax({
        url: 'ajax/controller.php',
        data: {
            'ajax_path':'inicio',
            'ajax_page':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#index_ajax_content').html(data);
        }
    });
    
    $("#index_usuarioTopo_sair").click(function(){
        
        if(confirm("Tem certeza que deseja sair?")) {
            
            $.ajax({
                url: 'ajax/controller.php',
                data: {
                    'ajax_path':'acesso',
                    'ajax_page':'ajax',
                    'case':'act',
                    'act':'setLogout'
                },
                type: 'POST',
                success: function() {

                    window.location.href = "http://localhost/projeto_hospitalar/";

                }
            });
            
        }
        
    });

    $(".index_menuButton").click(function(){
        
        $("#index_subMenuItens").html("");
        
        $.ajax({
            url: 'ajax/controller.php',
            data: {
                'ajax_path':$(this).attr("rel"),
                'ajax_page':'index'
            },
            type: 'POST',
            success: function(data) {
                    $('#index_ajax_content').html(data);
            }
        });
    
    });
    
});