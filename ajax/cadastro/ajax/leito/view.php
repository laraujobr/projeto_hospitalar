<?php 
    $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

 <fieldset>
        <legend>leitos</legend>
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>leito</th>
                        <th>Unidade</th>
                        <th>Status</th>
                        <th>Situacao</th>
                        <th>A&ccedil;&atilde;o</th>
                        <th>Inserir Novo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" size="50"></td>
                        <td>
                            <select>
                                <option>Unidade 1</option>
                                <option>Unidade 2</option>
                                <option>Unidade 3</option>
                                <option>Unidade 4</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option>Ocupado</option>
                                <option>Vazio</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </td>
                        <td><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                        <td><input type="button" id="cadastro_leito_view_index_indexInserir" value="Inserir" ></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <fieldset>
            <legend>Lista</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>leito</th>
                        <th>Unidade</th>
                        <th>Status</th>
                        <th>Situa&ccedil;&atilde;o</th>
                        <th>A&ccedil;&atilde;o</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>leito 1</td>
                        <td>Unidade 1</td>
                        <td>Ocupado</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_leito_view_index_indexAlterar" rel="1" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                                      
                    <tr>
                        <td>leito 2</td>
                        <td>Unidade 1</td>
                        <td>Vazio</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_leito_view_index_indexAlterar" rel="2" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>leito 3</td>
                        <td>Unidade 2</td>
                        <td>Ocupado</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_leito_view_index_indexAlterar" rel="3" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>leito 4</td>
                        <td>Unidade 3</td>
                        <td>Vazio</td>
                        <td>Ativo</td>
                        <td><a  href="#" class="cadastro_leito_view_index_indexAlterar" rel="4" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </fieldset>


<div id="cadastro_leito_view_index_dialogInserir"></div>
<div id="cadastro_leito_view_index_dialogAlterar"></div>

<?php   break; } ?>