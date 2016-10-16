$(document).ready(function(){

    $.ajax({
        url: 'ajax/controller.php',
        data: {
            'ajax_path':'acesso',
            'ajax_page':'ajax',
            'case':'view',
            'view':'login'
        },
        type: 'POST',
        success: function(data) {
            $('#index_ajax_content').html(data);
        }
    });

});
