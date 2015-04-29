<?php
    require_once(__DIR__ . "/Database.php");
    session_start();
    
    $path = "/todo1/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "tasks";
    
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
    
    