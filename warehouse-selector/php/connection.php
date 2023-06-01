<?php
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wms";
    
    // $host = "sql3.freesqldatabase.com";
    // $username = "sql3458566";
    // $password = "H5LE6NVCBh";
    // $dbname = "sql3458566";

    $conn = new mysqli($host, $username, $password, $dbname);
        
        if($conn->connect_error)
        {
            die("Connection Failed " .$conn->connect_error);
        }
?>