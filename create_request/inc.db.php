<?php 
$con = new mysqli('localhost', 'root', '', 'restapi'); 

if($con->connect_errno) { 
    die('db connection failed'. $con->connect_error); 
}


?>