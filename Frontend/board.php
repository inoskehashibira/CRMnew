<?php






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Template</title>
</head>

<body>


    <div class="d-block d-sm-none">
        <nav class=" navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Subaru CRM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Sales Pipeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Services Pipeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Ownership Management</a>
                        </li>

                        <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->

                    </ul>

                </div>
            </div>
        </nav>
        <div class="container mt-3 ">


            <div class="row">
                <div class="col">
                    <a class="btn btn-warning" href="createLeadPage.php">Create New Lead</a>
                </div>
                <div class="col">
                    <form method="post" action="board.php" id="category-form">
                        <select class="form-select" name="category" onchange="document.getElementById('category-form').submit();">
                            <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>new</option>
                            <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>intermediate</option>
                            <option value="qualified" <?php if (isset($_POST["category"]) && $_POST["category"] == "qualified") echo "selected"; ?>>qualified</option>
                            <option value="delivered" <?php if (isset($_POST["category"]) && $_POST["category"] == "delivered") echo "selected"; ?>>delivered</option>
                            <option value="lost" <?php if (isset($_POST["category"]) && $_POST["category"] == "lost") echo "selected"; ?>>lost</option>


                        </select>
                    </form>

                    <!-- <form method="post" action="index.php" onsubmit="return false;">
                        <select name="category" onchange="submitForm(this)">
                            <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>new</option>
                            <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>intermediate</option>
                            <option value="qualified" <?php if (isset($_POST["category"]) && $_POST["category"] == "qualified") echo "selected"; ?>>qualified</option>
                            <option value="delivered" <?php if (isset($_POST["category"]) && $_POST["category"] == "delivered") echo "selected"; ?>>delivered</option>
                            <option value="lost" <?php if (isset($_POST["category"]) && $_POST["category"] == "lost") echo "selected"; ?>>lost</option>
                        </select>
                    </form>
                    <script>
                        function submitForm(select) {
                            let form = select.form;
                            let category = select.value;

                            // Use an XMLHttpRequest to send the data to the server
                            let xhr = new XMLHttpRequest();
                            xhr.open('POST', form.action, true);
                            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                            xhr.onload = function() {
                                // Handle the response from the server here
                            };
                            xhr.send('category=' + category);
                        }
                    </script> -->




                </div>





            </div>




        </div>

        <div class=" row m-2">
            <div class="col-sm">


                <?php
                if (isset($_POST["category"])) {
                    $selected_category = $_POST["category"];
                }

                ?>

                <h5 class="border-3 border-dark border-bottom p-2"><?php echo empty($selected_category) ? "new" : $selected_category; ?></h5>


                <?php

                include "../Backend/db_con.php";
                $sql = "SELECT * FROM `leads`";
                $result = mysqli_query($con, $sql);


                while ($row = mysqli_fetch_assoc($result)) {
                    $temp = empty($selected_category) ? "new" : $selected_category;
                    if ($row['lead_catagory'] == $temp) {

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
                                                <i class="bi bi-three-dots-vertical col m-0 p-0"></i>
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
        </div>





    </div>



    <div class="d-none d-md-block">
        <div class="container my-4 p-3">




            <a class="btn btn-warning mb-3" href="Frontend/createLeadPage.php">Create New Lead</a>
            <div class="d-block d-sm-none">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mobile Dropdown
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
                <div class="col-sm">
                    <h5 class="border-3 border-dark border-bottom p-2">New</h5>
                    <?php
                    include "Backend/db_con.php";
                    $sql = "SELECT * FROM `leads`";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['lead_catagory'] == 'new') {

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
                                                    <i class="bi bi-three-dots-vertical col m-0 p-0"></i>
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
                <div class="col-sm">
                    <h5 class="border-3 border-dark border-bottom p-2">
                        Qualified
                    </h5>
                    <?php
                    include "Backend/db_con.php";
                    $sql = "SELECT * FROM `leads`";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['lead_catagory'] == 'qualified') {

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
                                                    <i class="bi bi-three-dots-vertical col m-0 p-0"></i>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=new">new</a></li>
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

                    <?php
                    include 'components/card.php'
                    ?>

                </div>



                <div class="col-sm">
                    <h5 class="border-3 border-dark border-bottom p-2">
                        Intermediate
                    </h5>
                    <?php
                    include "Backend/db_con.php";
                    $sql = "SELECT * FROM `leads`";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['lead_catagory'] == 'intermediate') {

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
                                                    <i class="bi bi-three-dots-vertical col m-0 p-0"></i>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=qualified">Qualified</a></li>
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=new">new</a></li>
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

                    <?php
                    include 'components/card.php'
                    ?>
                </div>

                <div class="col-sm">
                    <h5 class="border-3 border-dark border-bottom p-2">
                        Delivered
                    </h5>

                    <?php
                    include "Backend/db_con.php";
                    $sql = "SELECT * FROM `leads`";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['lead_catagory'] == 'delivered') {

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
                                                    <i class="bi bi-three-dots-vertical col m-0 p-0"></i>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=qualified">Qualified</a></li>
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=intermediate">Intermediate</a></li>
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=new">new</a></li>
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

                    <?php
                    include 'components/card.php'
                    ?>



                </div>
                <div class="col-sm">
                    <h5 class="border-3 border-dark border-bottom p-2">Lost</h5>


                    <?php
                    include "Backend/db_con.php";
                    $sql = "SELECT * FROM `leads`";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['lead_catagory'] == 'lost') {

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
                                                    <i class="bi bi-three-dots-vertical col m-0 p-0"></i>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=qualified">Qualified</a></li>
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=intermediate">Intermediate</a></li>
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=delivered">Delivered</a></li>
                                                    <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=<?php echo $row['Lead_ID'] ?>&Transition_Stage=new">new</a></li>
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

                    <?php
                    include 'components/card.php'
                    ?>



                </div>
            </div>
        </div>


    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>