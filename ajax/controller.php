<?php
header("Content-Type: text/html; charset=UTF-8",true);

$ajax_path = $_REQUEST['ajax_path'];
$ajax_page = $_REQUEST['ajax_page'];

if(file_exists("{$ajax_path}/{$ajax_page}.php")) {
    
    //BIBLIOTECAS GLOBAIS
    require_once("../engine/php/Utils.class.php");
    Utils::getLibFileList("../engine/php/", array("php"), $ajax_page);
        
    //BIBLIOTECAS LOCAIS
    $utilsAjax_page = isset($_REQUEST['case'])?"{$ajax_page}_{$_REQUEST['case']}":$ajax_page;
    $utilsAjax_page = isset($_REQUEST['view'])?"{$utilsAjax_page}_{$_REQUEST['view']}":$utilsAjax_page;
    $utilsAjax_page = isset($_REQUEST['dialog'])?"{$utilsAjax_page}_{$_REQUEST['dialog']}":$utilsAjax_page;
    
    $extensions = Array("php","js","css");
    Utils::getLibFileList("../ajax/{$ajax_path}/lib/", $extensions, $utilsAjax_page);
        
    require_once("{$ajax_path}/{$ajax_page}.php");
    
} else {
    
    echo "Arquivo requisitado não encontrado. {$ajax_path}/{$ajax_page}.php"; 
    
}
?>
