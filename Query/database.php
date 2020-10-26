<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "academy";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database",$user,$pass);
        return true;
    } catch (PDOException $e) {
        print "Error! : ".$e->getMessage()."<br>";
        return false;
    }
?>