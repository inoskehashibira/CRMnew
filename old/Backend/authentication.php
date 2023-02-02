<?php
include "db_con.php";

$userName = $_POST['username'];
$password = $_POST['password'];

// var_dump($userName);
// var_dump($password);
// die();
//declare 5 varirables



// $sql = "UPDATE `leads` SET lead_catagory =". $transition_stage." WHERE Lead_ID =$id";
$sql = "SELECT * FROM `users` where UserName='$userName'";

$result = mysqli_query($con,  $sql);
$data = mysqli_fetch_assoc($result);

if ($result) {
    //   header("Location: ../index.php?msg=new record created successfully");
    if ($data['Password'] == $password) {
        print "<h2> Login Successful </h2>";
    } else {
        print "<h2> Login unsuccessful </h2>";
    }
} else {

    echo "Failed: " . mysqli_error($con);
}
