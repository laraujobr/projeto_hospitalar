<?php
$dialog = $_REQUEST['dialog'];

                switch($dialog){

                    case 'alterar':   
                       
                        
                       $id = $_REQUEST['rel'];
        ?>

        <table>
            <tbody>
                <tr>
                    <td><strong>Médico:</strong></td>
                    <td><input id="cadastro_medico_dialog_alterar_dialogNome" type="text" value="Médico <?php echo "{$id}"; ?>" /></td>
                </tr>
                <tr>
                    <td><strong>Tipo Médico:</strong></td>
                    <td>
                        <select id="cadastro_medico_dialog_alterar_dialogUsuario" >
                                <option>Anestesista</option>
                                <option>Cirurgião</option>
                                <option>Clínico Geral</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Status:</strong></td>
                    <td>
                        <select id="cadastro_medico_dialog_alterar_dialogStatus" >
                            <option value="true" selected="selected" >Ativo</option>    
                            <option value="false" >Inativo</option>  
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
                    <td><strong>Médico:</strong></td>
                    <td><input id="cadastro_medico_dialog_inserir_dialogNome" type="text"  /></td>
                </tr>
                <tr>
                    <td><strong>Tipo Médico:</strong></td>
                    <td>
                        <select id="cadastro_medico_dialog_inserir_dialogUsuario" >
                                <option>Anestesista</option>
                                <option>Cirurgião</option>
                                <option>Clínico Geral</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Status:</strong></td>
                    <td>
                        <select id="cadastro_medico_dialog_inserir_dialogStatus" >
                            <option value="true"  selected="selected" >Ativo</option>    
                            <option value="false" >Inativo</option>  
                        </select>    
                    </td>
                </tr>
            <tbody>
        </table>


<?php    } ?>