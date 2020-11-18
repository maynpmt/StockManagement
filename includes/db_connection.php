<?php
    function OpenCon(){

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "godzilla_store";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

        // check error
        if($conn->connect_error){
            echo $conn->connect_error;
        }else{
            // echo "connected";
        }

        return $conn;

    }
        
    function CloseCon($conn){
        $conn -> close();
    }

?>