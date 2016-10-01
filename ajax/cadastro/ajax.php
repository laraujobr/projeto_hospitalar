<?php
$case = $_REQUEST['case'];

switch($case) {
 
    case 'view': 
    
        $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'getSubMenu':
                    
?>

    <ul>
        <li><a href="#" class="cadastro_menuButton" rel="unidade">Unidades</a></li>
    </ul>

<?php
                
            break;
                
        }
       
    break;

}
?>