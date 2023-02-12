<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- <link rel="stylesheet" href="Css/style.css"> -->

    <title>Subaru CRM</title>



</head>



<body>

    <?php

    include "NavBar.php";


    ?>
    <!-- Pipeline container starts here -->
    <div class="container-fluid mt-3">

        <!-- <div class="d-block d-sm-none">
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
        </div> -->
        <div class="col mb-3 d-block d-sm-none">
            <form method="post" action="" id="category-form">
                <select class="form-select" name="category" onchange="document.getElementById('category-form').submit();">
                    <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>Lead</option>
                    <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>Deal</option>
                    <option value="qualified" <?php if (isset($_POST["category"]) && $_POST["category"] == "qualified") echo "selected"; ?>>Quotation</option>
                    <option value="delivered" <?php if (isset($_POST["category"]) && $_POST["category"] == "delivered") echo "selected"; ?>>Booking</option>
                    <option value="lost" <?php if (isset($_POST["category"]) && $_POST["category"] == "lost") echo "selected"; ?>>Item Ready</option>
                    <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>Won</option>
                    <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>Lost</option>


                </select>
            </form>

        </div>

        <div class="row ">
            <!----------------------------Lead Column---------------- -->

            <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="col-sm">
                    <h5 class=" rounded  p-2 bg-secondary text-white text-center mb-3 ">Lead</h5>

                    <div class="shadow p-1 mb-5 bg-white rounded" style="width: 7 rem;">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Customer_Name</h5>
                                </div>
                                <div class="col-3">

                                    <div class="dropdown">
                                        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dLabel">

                                            <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                            <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                            <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                            <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                        </ul>
                                    </div>



                                </div>
                            </div>

                            <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                            <p class="card-text">
                                Customer_Email
                            </p>
                            <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                        </div>
                    </div>


                </div>
            </a>

            <!----------------------------Deal Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3 ">Deal</h5>



                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Customer_Name</h5>
                            </div>
                            <div class="col-3">

                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>
            <!----------------------------Quotation Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3 ">Quotation</h5>



                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Customer_Name</h5>
                            </div>
                            <div class="col-3">

                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>
            <!----------------------------Booking Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3  ">Booking</h5>



                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Customer_Name</h5>
                            </div>
                            <div class="col-3">

                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>
            <!----------------------------Item ready Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3 ">Item Ready</h5>



                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Customer_Name</h5>
                            </div>
                            <div class="col-3">

                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>
            <!----------------------------Won Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3  ">Won</h5>



                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Customer_Name</h5>
                            </div>
                            <div class="col-3">

                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>
            <!----------------------------Lost Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3  ">Lost</h5>



                <div class=" shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Customer_Name</h5>
                            </div>
                            <div class="col-3">

                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <!-- <i class="fa-solid fa-ellipsis-vertical"></i> -->
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=intermediate">Intermediate</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=delivered">Delivered</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=qualified">Qualified</a></li>
                                        <li><a class="dropdown-item" href="Backend/strage_transition.php?leadID=&Transition_Stage=lost">lost</a></li>
                                    </ul>
                                </div>



                            </div>
                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="frontend/lead_life_cycle.php?leadID=" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-header border">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <h5 class="modal-title text-center">New Lead Infomation</h5>
                            </h5>
                            <!--  -->

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <table class="table">
                                <!-- <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead> -->
                                <tbody>
                                    <!-- Add 9 rows to the table -->
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Name </td>
                                        <td>Irfan</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Phone </td>
                                        <td>017XXXXXXXXX</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Email </td>
                                        <td>Irfanulkalam@azneo.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Address </td>
                                        <td>5. jublee road, chittagongyjweyjwyjwj ruewrtuy wryw wrywry wryqet5rywery46urhrghrwghwqyq3 q35yqe5yqyr5y qery qeryq4eyw45tyw</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Interested </td>
                                        <td>Subaru XV</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Referenced By </td>
                                        <td>Sanaullah Chy</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Location </td>
                                        <td>Chittagong</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td>Created By </td>
                                        <td>Irfanul Kalam chy</td>
                                    </tr>
                                    <!-- Repeat 8 more times -->
                                </tbody>
                            </table>
                            <div class="d-flex  mt-2 flex-column align-items-center">


                                <h6 class="">Assign TO </h6>

                                <select class="form-select mt-2 " style="width:50%;" name="category" onchange="document.getElementById('category-form').submit();">
                                    <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>Person 1</option>
                                    <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>Person 2</option>
                                    <option value="qualified" <?php if (isset($_POST["category"]) && $_POST["category"] == "qualified") echo "selected"; ?>>Person 3</option>
                                    <option value="delivered" <?php if (isset($_POST["category"]) && $_POST["category"] == "delivered") echo "selected"; ?>>Person 4</option>



                                </select>

                                <button type="button" class="btn btn-primary mt-2" style="width:fit-content;">Assigned</button>
                            </div>

                        </div>



                    </div>
                </div>
            </div>


        </div>
    </div>












</body>

</html>