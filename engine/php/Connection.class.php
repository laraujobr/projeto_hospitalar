<?php

class Connection {
    
    public static function getResult($query) {
        
        $db_name = "(local)";
        $database = array("Database"=>"stark","UID"=>"sys_hospitalar", "PWD"=>"123456" );
        
        $link = sqlsrv_connect($db_name,$database);

        if (!$link) {

            die('Could not connect: ' . print_r(sqlsrv_errors()));

        }

        $db_selected = sqlsrv_query($link,$query);

        if (!$db_selected) {

            die ('Can\'t use Stark : ' . print_r(sqlsrv_errors()));

        }

        $result = $db_selected;

        if (!$result) {

            $message  = 'Invalid query: ' . sqlsrv_errors() . "<br />";
            $message .= 'Whole query: ' . $query;
            die($message);

        } else {

            $data = Array();

            while ($row = sqlsrv_fetch_array($result)) {
                array_push($data,$row);
            }

            sqlsrv_close($link);

            return $data;

        }

    }

    public static function setValue($query) {

        $db_name = "(local)";
        $database = array("Database"=>"stark","UID"=>"sys_hospitalar", "PWD"=>"123456" );
        
        $link = sqlsrv_connect($db_name,$database);

        if (!$link) {

            die('Could not connect: ' . sqlsrv_errors());

        }

        $db_selected = sqlsrv_query($link,$query);

        if (!$db_selected) {

            die ('Can\'t use Stark : ' . sqlsrv_errors());

        }

        $query = utf8_decode($query);
        
        sqlsrv_query($query);
        $id = sqlsrv_insert_id();
                
        sqlsrv_close($link);

        return $id;

    }

}

?> 
