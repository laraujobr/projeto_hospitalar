<?php 
    $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

 <fieldset>
        <legend>Unidades</legend>
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Unidade</th>
                        <th>Usuario Respons&aacute;vel</th>
                        <th>Situacao</th>
                        <th>A&ccedil;&atilde;o</th>
                        <th>Inserir Novo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" size="50"></td>
                        <td>
                        <select id="cadastro_unidade_dialog_alterar_dialogUsuario:" >
                            <option value="true"  selected="selected" disabled >Selecione</option>    
                            <option value="false"  >Usu&aacute;rio 1</option>
                            <option value="false"  >Usu&aacute;rio 2</option>
                            <option value="false"  >Usu&aacute;rio 3</option>
                            <option value="false"  >Usu&aacute;rio 4</option>
                        </select>    
                    </td>
                        <td>
                            <select>
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </td>
                        <td><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                        <td><input type="button" id="cadastro_unidade_view_index_indexInserir" value="Inserir" ></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <fieldset>
            <legend>Lista</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Unidade</th>
                        <th>Usuario Respons&aacute;vel</th>
                        <th>Situa&ccedil;&atilde;o</th>
                        <th>A&ccedil;&atilde;o</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Unidade 1</td>
                        <td>Usuario 1</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_unidade_view_index_indexAlterar" rel="1" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                                      
                    <tr>
                        <td>Unidade 2</td>
                        <td>Usuario 2</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_unidade_view_index_indexAlterar" rel="2" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>Unidade 3</td>
                        <td>Usuario 3</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_unidade_view_index_indexAlterar" rel="3" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>Unidade 4</td>
                        <td>Usuario 4</td>
                        <td>Ativo</td>
                        <td><a  href="#" class="cadastro_unidade_view_index_indexAlterar" rel="4" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </fieldset>


<div id="cadastro_unidade_view_index_dialogInserir"></div>
<div id="cadastro_unidade_view_index_dialogAlterar"></div>

<?php   break; } ?>