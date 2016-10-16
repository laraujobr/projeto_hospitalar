<?php

$case = $_REQUEST['case'];

switch($case) {   
    case 'view': 
        
        $view = $_REQUEST['view'];
        
        switch($view) {   
            case 'login': 
?>

    <div id="acesso_view_index_content">
        <fieldset>
            <legend><strong>Acesso ao Sistema</strong></legend>
            <table>
                <thead>                    
                    <tr>
                        <td align="right">Usuário:</td>
                        <td><input type="text" id="acesso_view_index_usuario" size="50" maxlength="50" /></td>
                    </tr>
                    <tr>
                        <td align="right">Senha:</td>
                        <td><input type="password" id="acesso_view_index_senha" size="50" maxlength="50" /></td>
                    </tr>
                    <tr>
                        <td align="right">Unidade:</td>
                        <td>
                            <select>
                                <option>Selecione</option>
                                <option>Unidade 1</option>
                                <option>Unidade 2</option>
                                <option>Unidade 3</option>
                                <option>Unidade 4</option>
                                <option>Unidade 5</option>
                            </select>    
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="left">
                            <input type="button" value="Acessar" id="acesso_view_index_acessar"> 
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="#" id="acesso_view_index_alterarSenha">Alterar minha senha</a> | <a href="#" id="acesso_view_index_resetPassword">Esqueci minha senha</a></td>
                    </tr>
                </thead>
            </table>
        </fieldset>
    </div>

<?php
            break;
        
            case 'index':
?>

    <fieldset>
        
        <legend>Usuários</legend>
    
        <fieldset>
            
            <legend>Filtros</legend>
        
            <table class="lista">

                <thead>

                    <tr>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Nível</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td><input type="text" size="50"></td>
                        <td><input type="text"></td>
                        <td>
                            <select>
                                <option>Administrador</option>
                                <option></option>
                                <option></option>
                            </select>
                        </td>
                        <td>
                            <select>
                                <option>Ativo</option>
                                <option>Inativo</option>
                            </select>
                        </td>
                        <td><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                    </tr>

                </tbody>

            </table>
            
        </fieldset>
        
        <fieldset>
            
            <legend>Lista</legend>
            
            <table class="lista">

                <thead>

                    <tr>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Nível</th>
                        <th>Situação</th>
                        <th>Ação</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Lucas Soares e Araújo</td>
                        <td>laraujo</td>
                        <td>Administrador</td>
                        <td>Ativo</td>
                        <td><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>                    
                    
                    <tr>
                        <td>Alice Vaneli Rodrigues</td>
                        <td>arodrigues</td>
                        <td>Administrador</td>
                        <td>Ativo</td>
                        <td><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    
                    <tr>
                        <td>Vitor Souza de Oliveira Brito</td>
                        <td>vbrito</td>
                        <td>Administrador</td>
                        <td>Ativo</td>
                        <td><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>
                    
                    <tr>
                        <td>Phillipe Souza Pires</td>
                        <td>ppires</td>
                        <td>Administrador</td>
                        <td>Ativo</td>
                        <td><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    </tr>

                </tbody>

            </table>
            
        </fieldset>
        
    </fieldset>
        
<?php
                
            break;
        }
    break;

    case 'act':       
        
        $act = $_REQUEST['act'];
        
        switch($act) {
            
            case 'getSessao':
                $usuario = $_REQUEST['usuario'];
                $senha = $_REQUEST['senha'];
                
                if($usuario == 'ppires' && $senha == '123'){
                    /*
                    $_SESSION['Usuario'] = SessaoUsuario::getSessao($usuario, $senha);
                    $_SESSION['Usuario']['Unidade'] = SessaoUsuario::getUnidades($_SESSION['Usuario']['0']['idUsuario']);
                    */
                    $_SESSION['Usuario']['0']['idUsuario'] = 2;
                    $_SESSION['Usuario']['0']['nmUsuario'] = 'Phillipe Souza Pires';
                    $_SESSION['Usuario']['0']['nmLogin'] = 'ppires';
                    //if(isset($_SESSION['Usuario']['idUsuario'])){
                    echo '1';
                }
                
            break;
            
            case 'setLogout':
                
                session_destroy();
                
            break;
        }
        
    break;
}        
?>
