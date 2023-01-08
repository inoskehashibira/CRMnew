<?php
include "db_con.php";
echo $_POST['Customer_Name'];
var_dump($_POST['submit']);
if (isset($_POST['submit'])) {

  echo $_POST['Customer_Name'];
  $Customer_Name = $_POST['Customer_Name'];
  $Organization = $_POST['Organization'];
  $Customer_Email = $_POST['Customer_Email'];
  $possibility = $_POST['possibility'];
  $Tag = $_POST['Tag'];
  $Schedule_Alarm = $_POST['Schedule_Alarm'];
  $Schedule_time = $_POST['Schedule_time'];
  $Schedule_date = $_POST['Schedule_date'];
  $notes = $_POST['notes'];

  $Lead_Creation_Time = date("l jS \of F Y h:i:s A");
  $Lead_CreatedBy = "sales person";
  $lead_catagory = "new";
  $extra2 = "Null";
  $extra3 = "Null";;

echo $Customer_Name;

  //$sql = "INSERT INTO `crud`( `firstName`, `lastName`, `email`, `gender`) VALUES (null,'$first_name','$last_name','$emali','$gender')";
  $sql = "INSERT INTO `leads`
( `Lead_Creation_Time`, `Lead_CreatedBy`, `Customer_Name`, `Organization_Name`, `Customer_Email`, `Possibility`, `Tag`, `Schedule_Activity`, `Schedule_Time`, `Schedule_Date`, `Notes`, `lead_catagory`, `extra2`, `extra3`) VALUES 
(' $Lead_Creation_Time',' $Lead_CreatedBy','$Customer_Name','$Organization','$Customer_Email','$possibility','$Tag','$Schedule_Alarm','$Schedule_time','$Schedule_date','$notes','$lead_catagory','$extra2','$extra2')";
 
 
 
 $result = mysqli_query($con,$sql);

  if ($result) {
   
    header("Location: index.php?msg=new record created successfully");
  } else {
    echo "Failed: " . mysqli_error($con);
  }
}
