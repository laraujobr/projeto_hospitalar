$(document).ready(function(){
   
    $(".cadastro_menuButton").click(function(){
        
        $.ajax({
            url: 'ajax/cadastro/ajax/controller.php',
            data: {
                'ajax_path':$(this).attr("rel"),
                'ajax_page':'index'
            },
            type: 'POST',
            success: function(data) {
                $('#cadastro_ajax_content').html(data);
            }
        });
    
    });
    
});
