<?php  
require_once("engine/php/Utils.class.php");
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        
        <title>Projeto Hospitalar</title>
        
        <?php 
        
            //BIBLIOTECAS GLOBAIS
            Utils::getLibFileList("engine/js/jquery-ui-1.9.0.custom/css/smoothness/", array("css"), false); 
            Utils::getLibFileList("engine/js/jquery-ui-1.9.0.custom/js/", array("js"), false); 
            Utils::getLibFileList("engine/css/", array("css"), false);
            Utils::getLibFileList("engine/js/js/", array("js"), false);
            Utils::getLibFileList("engine/php/", array("php"), false);
            
            //BIBLIOTECAS LOCAIS
            Utils::getLibFileList("lib/", array("php","css"), "index"); 
            
            //BIBLIOTECAS LOCAIS - ACESSO
            Utils::getLibFileList("lib/js/acesso/", array("js"), "index"); 
            
        ?>
    </head>
    
    <body>
       
        <!-- CONTEÚDO DINÂMICO -->
        <div id="index_ajax_content"></div>
        
    </body>
    
</html>