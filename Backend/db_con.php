<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "testcrm";


$con = mysqli_connect($severname, $username, $password, $dbname);




if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
