$(document).ready(function(){
   
    $.ajax({
        url: 'ajax/controller.php',
        data: {
            'ajax_path':'link',
            'ajax_page':'ajax',
            'case':'view',
            'view':'index'
        },
        type: 'POST',
        success: function(data) {
            $('#link_ajax_content').html(data);
        }
    });
    
});
