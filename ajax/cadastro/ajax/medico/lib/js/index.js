$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/cadastro/ajax/controller.php',
        data: {
            'ajax_path':'medico',
            'ajax_page':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#medico_ajax_content').html(data);
        }
    });
    
});
