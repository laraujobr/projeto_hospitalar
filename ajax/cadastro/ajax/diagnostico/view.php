<?php 
    $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

 <fieldset>
        <legend>Diagnósticos</legend>
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Diagnóstico</th>
                        <th>Situação</th>
                        <th>Ação</th>
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
                        <td>
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <a href="#" id="cadastro_diagnostico_view_index_indexInserir"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <fieldset>
            <legend>Lista</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Diagnóstico</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diagnostico 1</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="1" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                                      
                    <tr>
                        <td>Diagnostico 2</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="2" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>Diagnostico 3</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_diagnostico_view_index_indexAlterar" rel="3" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>Diagnostico 4</td>
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