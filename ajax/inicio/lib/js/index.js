$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/controller.php',
        data: {
            'ajax_path':'inicio',
            'ajax_page':'ajax',
            'case':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#inicio_ajax_content').html(data);
        }
    });
    
});
