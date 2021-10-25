<?php

class ConnectionManager {

    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "newnew";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);     
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    }

    function handleError($obj, $sql = null, $parameters = null) {
        $details = [
            "errno" => $obj->errorCode(),
            "errstr" => $obj->errorInfo(),

        ];
        if (! is_null($sql) ) {
            $details["sql"] = $sql;
        }
        if (! is_null($parameters) ) {
            $details["parameters"] = $parameters;
        }
        
        Logger::log( "Database Error", $details );
    }    
}