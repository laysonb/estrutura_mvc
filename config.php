<?php
require "environment.php";
$config = array();
if(ENVIRONMENT =="development"){
    define("BASE_URL","http://localhost/estruturamvc/");
    $config['dbname'] ='estruturamvc';
    $config['host']   ="localhost";
    $config['dbuser'] ="root";
    $config['dbpass'] ="";
}else{
    define("BASE_URL","http://milant.com/");
    $config['dbname'] ='estruturamvc';
    $config['host']   ="localhost";
    $config['dbuser'] ="root";
    $config['dbpass'] ="";
}
global $db;
try {
    $db = new PDO("myslql:dbname=".$config['dbname'].";host".$config['host'],$config['dbuser'],$config['dbpass']);
} catch (PDOException $e) {
    echo "Error".$e->getMessage();
}