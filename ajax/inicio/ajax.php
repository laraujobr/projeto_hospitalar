<?php
$case = $_REQUEST['case'];

switch($case) {
    
    case 'view': 
    
        $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>
    
    <fieldset>
        <legend>Início</legend>   
        
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Unidade</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" size="50"></td>
                        <td>
                        <select>
                            <option value="true"  selected="selected" disabled >Selecione</option>    
                            <option value="false" >Unidade 1</option>
                            <option value="false" >Unidade 2</option>
                            <option value="false" >Unidade 3</option>
                            <option value="false" >Unidade 4</option>
                        </select>    
                        </td>
                        <td>
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>

        <fieldset>    

            <legend>UTI CM 6o</legend>

            <div class="ajax_view_index_uti">
                <fieldset>
                    <legend>UP6M-01</legend>
                    <i class="fa fa-bed fa-3x" aria-hidden="true" style="color: green"></i>
                </fieldset>
            </div>

            <div class="ajax_view_index_uti">
                <fieldset>
                    <legend>UP6M-02</legend>
                    <i class="fa fa-bed fa-3x" aria-hidden="true" style="color: red"></i>
                </fieldset>
            </div>

            <div class="ajax_view_index_uti">
                <fieldset>
                    <legend>UP6M-03</legend>
                    <i class="fa fa-bed fa-3x" aria-hidden="true" style="color: green"></i>
                </fieldset>
            </div>

            <div class="ajax_view_index_uti">
                <fieldset>
                    <legend>UP6M-04</legend>
                    <i class="fa fa-bed fa-3x" aria-hidden="true" style="color: orangered"></i>
                </fieldset>
            </div>

            <div class="ajax_view_index_uti">
                <fieldset>
                    <legend>UP6M-05</legend>
                    <i class="fa fa-bed fa-3x" aria-hidden="true" style="color: green"></i>
                </fieldset>
            </div>

            <div class="ajax_view_index_uti">
            <fieldset>
                <legend>UP6M-06</legend>
                <i class="fa fa-bed fa-3x" aria-hidden="true" style="color: green"></i>
            </fieldset>
            </dia>
        
        </fieldset>
        
    </fieldset>      
    
<?php
                
            break;
            
        }
        
    break;
    
}

?>
