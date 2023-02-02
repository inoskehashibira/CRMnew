<?php

include "Backend/db_con.php";
$sql = "SELECT * FROM `leads`";
// $columnNames = array();
$columnNames = ["new", "qualified", "intermediate", "delivered", "lost"];
$total_leads = array();
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);

// var_dump($row);



// while ($row = mysqli_fetch_assoc($result)) {
//   // var_dump($row);
//   echo $row['lead_catagory'];
//   array_push($columnNames, $row['lead_catagory']);
//    echo "------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";

// }

// var_dump(array_unique($columnNames));

// die;



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Template</title>
</head>

<body>

  <?php

  // include 'frontend/navBar.php';
  // include 'frontend/temp.php';

  // include 'frontend/test.php';
  ?>



  <!-- <div class="d-none d-md-block"> -->
  <div class="container my-4 p-3">


    <a class="btn btn-warning mb-3" href="Frontend/createLeadPage.php">Create New Lead</a>
    <div class="d-block d-sm-none">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lead Category
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">New</a>
          <a class="dropdown-item" href="#">Intermeidate</a>
          <a class="dropdown-item" href="#">Qualified</a>
          <a class="dropdown-item" href="#">Delivered</a>
          <a class="dropdown-item" href="#">lost</a>
        </div>
      </div>
    </div>



    <div class="row ">
      <?php
      $index = 0;
      while ($index < count($columnNames)) {
      ?>
        <div class="col-sm">
          <h5 class="border-3 border-dark border-bottom p-2"><?php echo strtoupper($columnNames[$index]) ?></h5>
          <?php

          foreach($result as $row){
          
            
            if ($row['lead_catagory'] == $columnNames[$index]) {

          ?>
              <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;">
                <div class="card-body">

                  <div class="row">
                    <div class="col-9">
                      <h5 class="card-title"><?php echo $row['Customer_Name'] ?> </h5>
                    </div>
                    <div class="col-3">

                      <div class="dropdown">
                        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa-solid fa-ellipsis-vertical"></i>
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dLabel">

                          <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=qualified">Qualified</a></li>
                          <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=intermediate">Intermediate</a></li>
                          <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=delivered">Delivered</a></li>
                          <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=lost">lost</a></li>
                        </ul>
                      </div>



                    </div>
                  </div>

                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['Organization_Name'] ?></h6>
                  <p class="card-text">
                    <?php echo $row['Customer_Email'] ?>
                  </p>
                  <a href="frontend/lead_life_cycle.php?leadID=<?php echo $row['Lead_ID'] ?>" class="card-link">Lead Details</a>
                </div>
              </div>

          <?php
            }
          }
          ?>

        </div>



      <?php
        $index++;
      }
      ?>
    </div>






  </div>






  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>