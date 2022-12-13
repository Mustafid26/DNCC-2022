<?php
function connect(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "mustafid-todolist";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
}