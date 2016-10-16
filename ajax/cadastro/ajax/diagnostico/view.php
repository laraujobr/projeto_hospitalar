<?php 
    $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

 <fieldset>
        <legend>Diagnosticos</legend>
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Diagnostico</th>
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
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </td>
                        <td><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                        <td><input type="button" id="cadastro_diagnostico_view_index_indexInserir" value="Inserir" ></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <fieldset>
            <legend>Lista</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>diagnostico</th>
                        <th>Situa&ccedil;&atilde;o</th>
                        <th>A&ccedil;&atilde;o</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>diagnostico 1</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="1" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                                      
                    <tr>
                        <td>diagnostico 2</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="2" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>diagnostico 3</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="3" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>diagnostico 4</td>
                        <td>Ativo</td>
                        <td><a  href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="4" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </fieldset>


<div id="cadastro_diagnostico_view_index_dialogInserir"></div>
<div id="cadastro_diagnostico_view_index_dialogAlterar"></div>

<?php   break; } ?>