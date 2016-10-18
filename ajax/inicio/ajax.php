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
        
        <h3>UTI CM 6o</h3>
        
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
    
<?php
                
            break;
            
        }
        
    break;
    
}

?>
