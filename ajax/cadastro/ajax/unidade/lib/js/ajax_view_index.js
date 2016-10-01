$(document).ready(function(){
    
    $("#cadastro_unidade_view_index_dialogAlterar").dialog( {
        title: "Alterar Unidade",
        autoOpen: false,
        height: 650,
        width: 1000,
        buttons: [
                {
                    text: "Alterar",
                    click: function() {
                        alert("ALTEROU");
                    }
                },
                {
                    text: "Cancelar",
                    click: function() {
                        $(this).dialog("close");
                    }
                }
        ]
    });
    
    $("#cadastro_unidade_view_index_editar").click(function(){
        $("#cadastro_unidade_view_index_dialogAlterar").dialog("open");
    });
    
});