<?php 
    $view = $_REQUEST['view'];
        
        switch($view) {
            
            case 'index': 
      
?>

 <fieldset>
        <legend>Medicos</legend>
        <fieldset>
            <legend>Filtros</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>medico</th>
                        <th>Tipo m&eacute;dico
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
                                <option>Cirurgi&atilde;o</option>
                                <option>Cl&iacute;nico Geral</option>
                                <option>Anestesista</option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </td>
                        <td><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                        <td><input type="button" id="cadastro_medico_view_index_indexInserir" value="Inserir" ></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <fieldset>
            <legend>Lista</legend>
            <table class="lista">
                <thead>
                    <tr>
                        <th>M&eacute;dico</th>
                        <th>Tipo m&eacute;dico
                        <th>Situa&ccedil;&atilde;o</th>
                        <th>A&ccedil;&atilde;o</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>medico 1</td>
                        <td>Cirurg&atilde;o</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_medico_view_index_indexAlterar" rel="1" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                                      
                    <tr>
                        <td>medico 2</td>
                        <td>Cl&iacute;nico Geral</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_medico_view_index_indexAlterar" rel="2" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>medico 3</td>
                        <td>Anestesista</td>
                        <td>Ativo</td>
                        <td><a href="#" class="cadastro_medico_view_index_indexAlterar" rel="3" ><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>medico 4</td>
                        <td>Cirurg&atilde;o</td>
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