<?php
//script to connect with the database

$servername="localhost";
$username = "root";
$password = "";
$database = "iforum";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Cann't Connect" . mysqli_connect_error());

}
?>