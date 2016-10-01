$(document).ready(function(){
    
    $('#acesso_view_index_usuario, #acesso_view_index_senha').bind('keypress', function(e) {

        if(e.keyCode == 13) {
            $("#acesso_view_index_acessar").trigger('click');	
        }		
		
    });
    
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
                    
                    if(data == 1) {
                        document.location.reload();
                    } else {
                        alert("Usuario ou Senha desconhecidos.");
                    }
                        
                }
                
        });
        
    });
    
});