$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/cadastro/ajax/controller.php',
        data: {
            'ajax_path':'diagnostico',
            'ajax_page':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#diagnostico_ajax_content').html(data);
        }
    });
    
});
