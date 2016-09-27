<?php

$case = $_REQUEST['case'];

switch($case) {   
    case 'view': 
        
        $view = $_REQUEST['view'];
        
        switch($view) {   
            case 'index': 
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
        }
    break;

    case 'act':       
        $act = $_REQUEST['act'];
        switch($act) {
            case 'getSessao':
                $usuario = $_REQUEST['usuario'];
                $senha = $_REQUEST['senha'];
                
                $_SESSION['Usuario'] = SessaoUsuario::getSessao($usuario, $senha);
                $_SESSION['Usuario']['Unidade'] = SessaoUsuario::getUnidades($_SESSION['Usuario']['0']['idUsuario']);
                
            break;
        }
        
    break;
}        
?>
