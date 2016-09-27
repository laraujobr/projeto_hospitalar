$(document).ready(function(){
    
    $("#acesso_view_index_acessar").click(function(){
        
        $.ajax({
            url: 'ajax/controller.php',
                data: {
                    'ajax_path':'acesso',
                    'ajax_page':'ajax',
                    'case':'act',
                    'act':'getSessao',                
                    'usuario': $("#acesso_view_index_usuario").val(),
                    'senha': $("#acesso_view_index_senha").val()
                },
                type: 'POST',
                success: function(data) {
                        
                    alert(data);
                        
                }
                
        });
        
    });
    
});