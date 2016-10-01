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
            
            Utils::getLibFileList("lib/", array("php","css"), "index"); 
            
            if(isset($_SESSION['Usuario'])){
                Utils::getLibFileList("lib/js/inicio/", array("js"), "index");
            }else {
                Utils::getLibFileList("lib/js/acesso/", array("js"), "index");
            }

        ?>
    </head>
    
    <body>
        <?php if(isset($_SESSION['Usuario'])){ ?>
            <div id="index_menuTopo">

                <div id="index_menuTopoItens">
                    <ul>
                        <li><a href="#" class="index_menuButton" rel="inicio"><?php echo "Inicio";?></a></li>
                        <li><a href="#" class="index_menuButton" rel="acesso"><?php echo "Acessos";?></a></li>
                        <li><a href="#" class="index_menuButton" rel="cadastro"><?php echo "Cadastros";?></a></li>
                    </ul>
                </div>

                <div id="index_menuTopoLogo">   
                    <img src="lib/image/hospital.png" width="150px" height="75px">
                </div>

            </div>

            <div id="index_subMenuTopo">

                <div id="index_subMenuItens"></div>

                <div id="index_usuarioTopo">
                    <?php echo  'M'=='M'?'Bem-Vindo':'Bem-Vinda';?>, <a href="#" rel="<?php echo "123";?>" class=""><?php echo  "Usuario Teste";?></a> - <a href="#" id="index_usuarioTopo_sair" >Sair</a>
                </div>

            </div>        
        <?php } ?>
        <div id="index_ajax_content"></div>
        
        <div id="index_rodape">2016 - Prototipo Projeto HC</div>
        
    </body>
    
</html>