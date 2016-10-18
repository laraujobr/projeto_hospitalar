<?php  
require_once("engine/php/Utils.class.php");
?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Projeto Hospitalar</title>
        
        <?php 
        
            Utils::getLibFileList("engine/js/jquery-ui-1.9.0.custom/css/smoothness/", array("css"), false); 
            Utils::getLibFileList("engine/js/jquery-ui-1.9.0.custom/js/", array("js"), false); 
            Utils::getLibFileList("engine/css/", array("css"), false);
            Utils::getLibFileList("engine/css/font-awesome-4.6.3/css/font-awesome.min.css", array("css"), false);
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
                        <li>
                            <div><i class="fa fa-h-square fa-3x" aria-hidden="true" style="color: #2b81af"></i></div>
                            <div><a href="#" class="index_menuButton" rel="inicio">Início</a></div>
                        </li>
                        <li>
                            <div><i class="fa fa-user fa-3x" aria-hidden="true" style="color: #2b81af"></i></div>
                            <div><a href="#" class="index_menuButton" rel="acesso">Acessos</a></div>
                        </li>
                        <li>
                            <div><i class="fa fa-puzzle-piece fa-3x" aria-hidden="true" style="color: #2b81af"></i></div>
                            <div><a href="#" class="index_menuButton" rel="cadastro">Cadastro</a></div>
                        </li>
                        <li>
                            <div><i class="fa fa-user-md fa-3x" aria-hidden="true" style="color: #2b81af"></i></div>
                            <div><a href="#" class="index_menuButton" rel="internacao">Internação</a></div>
                        </li>
                        <li>
                            <div><i class="fa fa-link fa-3x" aria-hidden="true" style="color: #2b81af"></i></div>
                            <div><a href="#" class="index_menuButton" rel="link">Links</a></div>
                        </li>
                    </ul>
                </div>

                <div id="index_menuTopoLogo">   
                    <i class="fa fa-heartbeat fa-5x" aria-hidden="true" style="color: red"></i>
                </div>

            </div>

            <div id="index_subMenuTopo">

                <div id="index_subMenuItens"></div>

                <div id="index_usuarioTopo">
                    <?php echo  'M'=='M'?'Bem-Vindo':'Bem-Vinda';?>, <a href="#" rel="<?php echo "123";?>" class=""><?php echo  "Phillipe Souza Pires";?></a> - <a href="http://localhost/projeto_hospitalar/" target="_blank" >Nova Guia</a> - <a href="#" id="index_usuarioTopo_sair" >Sair</a>
                </div>

            </div>        
        <?php } ?>
        
        <div id="index_ajax_content"></div>
        
        <div id="index_rodape">2016 - Protótipo Projeto HC</div>
        
    </body>
    
</html>
