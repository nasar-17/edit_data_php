<?php

$host = 'localhost';
$database = 'coba';
$username = 'root';
$password = '';

$connection = mysqli_connect('localhost','root','','coba');
header('content-type: application/json');

if($connection){
    echo "Database connection successful.";
}else{
    return false;
}