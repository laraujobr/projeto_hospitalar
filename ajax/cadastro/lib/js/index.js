$(document).ready(function(){
    
    $.ajax({
        url: 'ajax/controller.php',
        data: {
            'ajax_path':'cadastro',
            'ajax_page':'ajax',
            'case': 'view',
            'view': 'getSubMenu'
        },
        type: 'POST',
        success: function(data) {
            $('#index_subMenuItens').html(data);
        }
    });
    
});