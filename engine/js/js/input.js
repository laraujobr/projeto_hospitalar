$(document).ready(function(){
    
    //INPUTS DE TEXTO
    $("input:text").live("focusin",function(){
        
        $(this).css("border-color","#666666");
        
    });
    
    $("input:text").live("focusout",function(){
        
        $(this).css("border-color","");
        
    });
   
});
