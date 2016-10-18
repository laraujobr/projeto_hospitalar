$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/cadastro/ajax/controller.php',
        data: {
            'ajax_path':'paciente',
            'ajax_page':'ajax',
            'case':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#paciente_ajax_content').html(data);
        }
    });
    
});
