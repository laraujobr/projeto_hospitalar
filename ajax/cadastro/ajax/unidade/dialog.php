<?php
$dialog = $_REQUEST['dialog'];

                switch($dialog){

                    case 'alterar':   
                       
                        
                       $id = $_REQUEST['rel'];
        ?>

        <table>
            <tbody>
                <tr>
                    <td><strong>Unidade:</strong></td>
                    <td><input id="cadastro_unidade_dialog_alterar_dialogNome" type="text" value="Unidade <?php echo "{$id}"; ?>" /></td>
                </tr>
                <tr>
                    <td><strong>Usu&aacute;rio Respons&aacute;vel: </strong></td>
                    <td>
                        <select id="cadastro_unidade_dialog_alterar_dialogUsuario:" >
                            <option value="true"  selected="selected" >Usu&aacute;rio <?php echo "{$id}"; ?></option>    
                            <option value="false"  >Usu&aacute;rio 2</option>
                            <option value="false"  >Usu&aacute;rio 3</option>
                            <option value="false"  >Usu&aacute;rio 4</option>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td><strong>Status: </strong></td>
                    <td>
                        <select id="cadastro_unidade_dialog_alterar_dialogStatus" >
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
                    <td><strong>Unidade:</strong></td>
                    <td><input id="cadastro_unidade_dialog_inserir_dialogNome" type="text"  /></td>
                </tr>
                <tr>
                    <td><strong>Usu&aacute;rio Respons&aacute;vel: </strong></td>
                    <td>
                        <select id="cadastro_unidade_dialog_inserir_dialogUsuario:" >
                            <option value="true"  selected="selected" >Usu&aacute;rio 1</option>    
                            <option value="false"  >Usu&aacute;rio 2</option>
                            <option value="false"  >Usu&aacute;rio 3</option>
                            <option value="false"  >Usu&aacute;rio 4</option>
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td><strong>Status: </strong></td>
                    <td>
                        <select id="cadastro_unidade_dialog_inserir_dialogStatus" >
                            <option value="true"  selected="selected" >Ativo</option>    
                            <option value="false"  >Inativo</option>  
                        </select>    
                    </td>
                </tr>
            <tbody>
        </table>


<?php    } ?>