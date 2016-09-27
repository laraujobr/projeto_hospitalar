<?php
class StatementsEngine {

    public static function getEstados(){

        $sql = "SELECT  estado,
                        nome,
                        uf,
                        ibge
                FROM estados
                ORDER BY nome ASC";

        return Connection::getResult($sql);

    }

    public static function getCidades($estado){

        $sql = "SELECT  cidade,
                        nome,
                        uf
                FROM cidades
                WHERE 1=1
                AND estado_cod = {$estado}";

        return Connection::getResult($sql);

    }

}

?>
