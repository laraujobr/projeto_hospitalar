<?php 
    $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

 <fieldset>
        <legend>Médicos</legend>
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>Médico</th>
                        <th>Tipo médico</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" size="50"></td>
                        <td>
                            <select>
                                <option>Anestesista</option>
                                <option>Cirurgião</option>
                                <option>Clínico Geral</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </td>
                        <td>
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            <a href="#" id="cadastro_medico_view_index_indexInserir"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
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
                        <th>Médico</th>
                        <th>Tipo médico</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Médico 1</td>
                        <td>Cirurgião</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_medico_view_index_indexAlterar" rel="1" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                                      
                    <tr>
                        <td>Médico 2</td>
                        <td>Clínico Geral</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_medico_view_index_indexAlterar" rel="2" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>Médico 3</td>
                        <td>Anestesista</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_medico_view_index_indexAlterar" rel="3" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>Médico 4</td>
                        <td>Cirurgião</td>
                        <td>Ativo</td>
                        <td><a  href="#" class="cadastro_medico_view_index_indexAlterar" rel="4" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </fieldset>


<div id="cadastro_medico_view_index_dialogInserir"></div>
<div id="cadastro_medico_view_index_dialogAlterar"></div>

<?php   break; } ?>