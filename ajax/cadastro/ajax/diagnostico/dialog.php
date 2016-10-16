<?php
$dialog = $_REQUEST['dialog'];

                switch($dialog){

                    case 'alterar':   
                       
                        
                       $id = $_REQUEST['rel'];
        ?>

        <table>
            <tbody>
                <tr>
                    <td><strong>diagnostico:</strong></td>
                    <td><input id="cadastro_diagnostico_dialog_alterar_dialogNome" type="text" value="diagnostico <?php echo "{$id}"; ?>" /></td>
                </tr>
                <tr>
                    <td><strong>Status: </strong></td>
                    <td>
                        <select id="cadastro_diagnostico_dialog_alterar_dialogStatus" >
                            <option value="true"  selected="selected" >Ativo</option>    
                            <option value="false"  >Inativo</option>  
                        </select>    
                    </td>
                </tr>
            <tbody>
        </table>

<?php           break;
                    case "inserir": ?>
        <table>
            <tbody>
                <tr>
                    <td><strong>diagnostico:</strong></td>
                    <td><input id="cadastro_diagnostico_dialog_alterar_dialogNome" type="text"  /></td>
                </tr>
                <tr>
                    <td><strong>Status: </strong></td>
                    <td>
                        <select id="cadastro_diagnostico_dialog_alterar_dialogStatus" >
                            <option value="true"  selected="selected" >Ativo</option>    
                            <option value="false"  >Inativo</option>  
                        </select>    
                    </td>
                </tr>
            <tbody>
        </table>


<?php    } ?>