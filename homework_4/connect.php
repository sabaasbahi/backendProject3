<?php

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "task4";

$conn = mysqli_connect(
    $server_name,
    $username,
    $password,
    $db_name
);

if(!$conn){
    die(mysqli_connect_error());
}

