<?php  
require_once("engine/php/Utils.class.php");
require_once("engine/php/Connection.class.php");
$query = "INSERT INTO tabela_teste VALUES ('macaco','tatu bola')";

$result = Connection::setValue($query);

/*print_r($result);*/
foreach($result as $k => $v){
    
    echo $v['campo_teste'];
    echo $v['campo_patogenico'];
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>TCC - Stark I</title>
        <?php 
        
            //BIBLIOTECAS GLOBAIS
            Utils::getLibFileList("engine/js/jquery-ui-1.9.0.custom/css/smoothness/", array("css"), false); 
            Utils::getLibFileList("engine/js/jquery-ui-1.9.0.custom/js/", array("js"), false); 
            Utils::getLibFileList("engine/css/", array("css"), false);
            Utils::getLibFileList("engine/js/js/", array("js"), false);
            Utils::getLibFileList("engine/php/", array("php"), false);
            
            //BIBLIOTECAS LOCAIS
            Utils::getLibFileList("lib/", array("php","css"), "index"); 
            
            //VERIFICA SE O USUÁRIO ESTA LOGADO PARA INCLUIR A BIBLIOTECA CORRESPONDENTE
            if(isset($_SESSION['usuario'])) {
                
                Utils::getLibFileList("lib/js/inicio/", array("js"), "index"); 
                
            } else {
                
                Utils::getLibFileList("lib/js/acesso/", array("js"), "index"); 
                
            }
            
            //CHAMADAS EXTERNAS VIA URL
            if(isset($_REQUEST['external'])) {
                
                $external = isset($_REQUEST['external'])?$_REQUEST['external']:'';
                $controller_path = isset($_REQUEST['controller_path'])?$_REQUEST['controller_path']:'';
                $ajax_path = isset($_REQUEST['ajax_path'])?$_REQUEST['ajax_path']:'';
                $ajax_page = isset($_REQUEST['ajax_page'])?$_REQUEST['ajax_page']:'';
                $scase = isset($_REQUEST['case'])?$_REQUEST['case']:'';
                $view = isset($_REQUEST['view'])?$_REQUEST['view']:'';
                $act = isset($_REQUEST['act'])?$_REQUEST['act']:'';
                
            }
            
            if(isset($external)) {
        ?>
        <script type="text/javascript">
            
            $(document).ready(function() {
                
                external("<?php echo $controller_path;?>","<?php echo $ajax_path;?>","<?php echo $ajax_page;?>","<?php echo $scase;?>","<?php echo $view;?>","<?php echo $act;?>");
                
            });
                
        </script>
        <?php }?>
        <script type="text/javascript" src="ajax/administracao/ajax/usuarios/lib/js/ajax_view_lista.js" ></script>
    </head>
    <body>
        
        <?php if(isset($_SESSION['usuario'])) {?>
            
            <div id="index_usuarioTopo">

                <?php echo  $_SESSION['usuario']['sexo']=='M'?'Bem-Vindo':'Bem-Vinda';?>, <a href="#" rel="<?php echo $_SESSION['usuario']['id'];?>" class="administracao_usuarios_view_lista_dialogUpdateButton"><?php echo  $_SESSION['usuario']['nome'];?></a> <a href="#" id="index_usuarioTopo_sair" >sair</a>
                
            </div>
        
            <div id="index_menuTopo">

                <ul>
                    <?php 
                    $menus = Statements::getMenus();
                    foreach($menus as $k => $v) {?>
                        <li>
                            <div class="index_menuTopo_icon"><img src="lib/images/icons/themes/<?php echo $_SESSION['usuario']['preferencias']['menuTheme'];?>/<?php echo $v['icon'];?>.png" alt="" class="index_menuButton" rel="<?php echo $v['rel'];?>"></div>
                            <div class="index_menuTopo_descricao"><a href="#" class="index_menuButton" rel="<?php echo $v['rel'];?>"><?php echo $v['descricao'];?></a></div>
                        </li>
                    <?php } ?>
                </ul>

            </div>
        
        <?php }?>
       
        <div id="index_ajax_content"></div>
        
        <div id="administracao_usuarios_view_lista_dialogAlterar"></div>
        
    </body>
</html>
