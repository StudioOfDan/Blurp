<?php
require "classes/startup.php";
require "classes/SQL.php";

//Secure the switch against SQL injection
$start = new start();
$start->secureSwitch();

//Connect to database
$con = new sql();
$con->connect();
include "views/header.php";
include "views/nav.php";

switch($page){
    default :
        $data = $con->query('SELECT * FROM `doc`');
        include "views/home.php";
        break;

}