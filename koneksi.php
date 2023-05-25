<?php

function getConn()
{

    $host = 'localhost';
    $port = 3306;
    $username = "root";
    $password = "";
    $dbname = "resto";

    return new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
}
