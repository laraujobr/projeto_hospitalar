<?php

class SessaoUsuario {
    
    public static function getSessao ($usuario, $senha){
        
        $sql = "SELECT
        a.idUsuario,    
        a.nmUsuario,
        a.nmLogin,
        a.idNivel
        FROM [cfg].Usuario a
        WHERE 1=1
        AND a.nmLogin =  '{$usuario}'
        AND a.cdSenha =  {$senha}         
        AND a.flAtivo = 1";  
        return Connection::getResult($sql);
    }
    
    public static function getUnidades ($idUsuario){
        
        $sql = "SELECT 
        a.idUnidade
        FROM [cfg].UsuarioUnidade a
        WHERE 1=1
        AND  a.idUsuario = {$idUsuario}
        AND a.flAtivo = 1";
        return Connection::getResult($sql);
    }
}
