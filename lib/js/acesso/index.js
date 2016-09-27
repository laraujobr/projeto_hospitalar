$.ajax({
    url: 'ajax/controller.php',
    data: {
        'ajax_path':'acesso',
        'ajax_page':'index'
    },
    type: 'POST',
    success: function(data) {
        $('#index_ajax_content').html(data);
    }
});