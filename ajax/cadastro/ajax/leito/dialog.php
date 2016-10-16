<?php
$dialog = $_REQUEST['dialog'];

                switch($dialog){

                    case 'alterar':   
                       
                        
                       $id = $_REQUEST['rel'];
        ?>

        <table>
            <tbody>
                <tr>
                    <td><strong>leito:</strong></td>
                    <td><input id="cadastro_leito_dialog_alterar_dialogNome" type="text" value="leito <?php echo "{$id}"; ?>" /></td>
                </tr>
                <tr>
                    <td><strong>Unidade: </strong></td>
                    <td>
                        <select id="cadastro_leito_dialog_alterar_dialogUnidade" >
                                <option>Unidade 1</option>
                                <option>Unidade 2</option>
                                <option>Unidade 3</option>
                                <option>Unidade 4</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Status: </strong></td>
                    <td>
                        <select id="cadastro_leito_dialog_alterar_dialogStatus" >
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
                    <td><strong>leito:</strong></td>
                    <td><input id="cadastro_leito_dialog_inserir_dialogNome" type="text"  /></td>
                </tr>
                <tr>
                    <td><strong>Unidade: </strong></td>
                    <td>
                        <select id="cadastro_leito_dialog_inserir_dialogUnidade" >
                                <option>Unidade 1</option>
                                <option>Unidade 2</option>
                                <option>Unidade 3</option>
                                <option>Unidade 4</option>
                        </select> 
                    </td>
                </tr>
                <tr>
                    <td><strong>Status: </strong></td>
                    <td>
                        <select id="cadastro_leito_dialog_inserir_dialogStatus" >
                            <option value="true"  selected="selected" >Ativo</option>    
                            <option value="false"  >Inativo</option>  
                        </select>    
                    </td>
                </tr>
            <tbody>
        </table>


<?php    } ?>