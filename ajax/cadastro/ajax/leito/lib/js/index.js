$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/cadastro/ajax/controller.php',
        data: {
            'ajax_path':'leito',
            'ajax_page':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#leito_ajax_content').html(data);
        }
    });
    
});
