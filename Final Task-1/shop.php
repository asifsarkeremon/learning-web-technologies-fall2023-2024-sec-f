<?php 

    $host = "localhost";
    $dbname = "shop";
    $dbuser = "root";
    $dbpass = "";

    function dbConnection()
    {
        global $host;
        global $dbuser;

        $con = mysqli_connect($host, $dbuser, $GLOBALS['dbpass'], $GLOBALS['dbname']);
        return $con;
    }

    function createUser($user){
        $con = dbConnection();
        $sql = "insert into emp values('{$user['name']}', '{$user['contact']}', '{$user['username']}', '{$user['password']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    
    
?>