<?php

/*
$hostname= "localhost";
$username = "misheck";
$passwd = "5283";
$db_name = "tmc";
$db = new mysqli($derve,$user,$passwd,$dbname);

if(!$db){
    echo "failed";
}
$qr = "insert into music";
*/

class App extends mysqli {
    
    protected $hostname= "localhost";
    protected $username = "misheck";
    protected $passwd = "5283";
    protected $db_name = "tmc";
    protected $db;
   function __construct(string $hostname = null, string $username = null, string $password = null, string $database = null, int $port = null, string $socket = null){
 $this->connect();
}
}
$db = new App("localhost","misheck","5283", "tmc");