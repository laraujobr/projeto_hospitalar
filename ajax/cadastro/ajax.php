<?php
$case = $_REQUEST['case'];

switch($case) {
 
    case 'view': 
    
        $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'getSubMenu':
                    
?>

    <ul>
        <li><a href="#" class="cadastro_menuButton" rel="cultura">Cultura</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="diagnostico">Diagnósticos</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="exame">Exames</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="leito">Leitos</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="medico">Médicos</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="motivo">Motivos</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="paciente">Pacientes</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="sinaisVitais">Sinais Vitais</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="tipo">Tipos</a></li>
        <li><a href="#" class="cadastro_menuButton" rel="unidade">Unidades</a></li>
    </ul>

<?php
                
            break;
                
        }
       
    break;

}
?>
