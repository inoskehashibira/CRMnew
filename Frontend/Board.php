<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bundle min -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="Css/style.css"> -->

    <title>Subaru CRM</title>



</head>



<body>

    <?php

    include "NavBar.php";


    ?>
    <!-- Pipeline container starts here -->
    <div class="container-fluid mt-3">




        <div class="row ">
            <!----------------------------Lead Column---------------- -->
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
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



        </div>
    </div>












</body>

</html>