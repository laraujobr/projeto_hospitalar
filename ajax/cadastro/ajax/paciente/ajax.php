<?php
$case = $_REQUEST['case'];

switch($case) {
    
    case 'view': 
    
        $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

    <fieldset>
        <legend><strong>Links</strong></legend>
    </fieldset>      
    
<?php
                
            break;
            
        }
        
    break;
    
}

?>
