$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/cadastro/ajax/controller.php',
        data: {
            'ajax_path':'unidade',
            'ajax_page':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#unidade_ajax_content').html(data);
        }
    });
    
});
