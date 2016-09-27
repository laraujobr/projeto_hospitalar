$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/controller.php',
        data: {
            'ajax_path':'acesso',
            'ajax_page':'ajax',
            'case':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#acesso_ajax_content').html(data);
        }
    });
           
});