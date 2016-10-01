<?php
$case = $_REQUEST['case'];

switch($case) {
    
    case 'view': 
    
        $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

<fieldset>

    <legend>Unidades</legend>

    <table>
        <tr>
            <td>
                <select>
                    <option>Selecione</option>
                    <option>Unidade 1</option>
                    <option>Unidade 2</option>
                    <option>Unidade 3</option>
                    <option>Unidade 4</option>
                    <option>Unidade 5</option>
                </select>       
            </td>
            <td><input type="button" id="cadastro_unidade_view_index_editar" value="Editar"></td>
            <td><input type="button" value="Incluir"></td>
        </tr>
    </table>
    
</fieldset> 

<div id="cadastro_unidade_view_index_dialogInserir"></div>
<div id="cadastro_unidade_view_index_dialogAlterar"></div>

<?php
                
            break;
            
        }
        
    break;
    
}

?>
