


// This file is renamed as SalesStages.....Goto That file


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />




    <!-- This jquery CDN is required for Modals -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script type="text/javascript" src="../Frontend/scripts.js"></script>

    <!-- <link rel="stylesheet" href="Css/style2.css"> -->

    <title>Subaru CRM</title>
    <!-- Ajax call to Deal form modal -->
    <script>
        function modalManager(data) {
            //console.log(data);
            var mObj = modalIdBuilder(data);
            var modalUrl = mObj.mUrl;
            var modalID = mObj.mID;

            console.log(mObj)
            // var myObject ="someting";


            var myObject = {
                id: 1,
                name: "someting"
            };

            $.ajax({
                url: modalUrl,

                cache: false,

                type: 'POST',
                data: {
                    myObject: JSON.stringify(myObject)
                },

                success: function(html) {
                    $("#modalContainer").html(html);
                    $(modalID).modal('show');
                }
            });
        }
    </script>


    <style>
        a {
            text-decoration: none !important;
        }

        body {
            font-family: 'Agency FB';
        }
    </style>

</head>



<body>

    <?php

    include "NavBar.php";


    ?>








    <!-- Pipeline container starts here -->
    <div class="container-fluid mt-3 ">

        <!---------------------------- DropDown for Mobile view ---------------- -->

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

            <div class="col-sm">

                <h5 class=" rounded  p-2 bg-secondary text-white text-center mb-3 ">Lead</h5>

                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 7 rem;" onclick="modalManager({'col':'new'} )">

                    <div class="card-body">



                        <div class="row">

                            <div class="col-10">

                                <h6 class="card-title">

                                    <a id="newLeadModalTrigger"> Customer_Name

                                    </a>

                                </h6>

                            </div>



                            <div class="col-2">

                                <button id="newLeadModalTrigger" onclick="modalManager({'col':'new'} )" class="btn btn-sm btn-darkblue  pt-1 pb-1 ps-2 pe-2" style="font-size: 0.6rem;"><i class="fas fa-eye"></i></button>

                            </div>

                        </div>



                        <small class="card-text mb-1"><b>Phone:</b> 01718339135</small><br>

                        <small class="card-text mb-1"><b>Email:</b> msifat5@gmail.com</small><br>

                        <small class="card-text mb-1"><b>Intersted In:</b> Subaru Forester, Subaru XV</small><br>

                        <small class="card-text mb-1"><b>Location:</b> </small><br>

                        <small class="card-text mb-1"><b>Created By:</b> </small>

                        <!-- <a href="" class="card-link">Lead Details</a> -->

                    </div>

                </div>
                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 7 rem;">

                    <div class="card-body">
                        <div class="row">

                            <div class="col-10">

                                <h6 class="card-title">

                                    <a id="newLeadModalTrigger"> Customer_Name

                                    </a>

                                </h6>

                            </div>
                        </div>

                        <small class="card-text mb-1"><b>Phone:</b> 01718339135</small><br>


                        <small class="card-text mb-1"><b>Intersted In:</b> Subaru Forester, Subaru XV</small><br>

                        <small class="card-text mb-1"><b>Location:</b> </small><br>

                        <small class="card-text mb-1"><b>Created By:</b> Irfanul Kalam Chy</small>

                        <!-- <a href="" class="card-link">Lead Details</a> -->
                        <div>
                            <button id="newLeadModalTrigger" onclick="modalManager({'col':'new'} )" class="btn btn-sm btn-darkblue  pt-1 pb-1 ps-2 pe-2" style="font-size: 0.6rem;">Assign</button>

                        </div>
                    </div>

                </div>

                <div id="modalContainer2"></div>

            </div>





            <!----------------------------Deal Column---------------- -->
            <div class="col-sm" class="link-dark">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3 ">Deal</h5>

                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;" onclick="modalManager({'approvalStatus':true,'col':'deal'} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <a href="#" id="myBtn" class="link-dark">
                                        Customer_Name

                                    </a>


                                </h5>
                            </div>

                        </div>

                        <h6 class="card-subtitle mb-2 text-muted">Organization_Name</h6>
                        <p class="card-text">
                            Customer_Email
                        </p>
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>
                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;" onclick="modalManager({'approvalStatus':false,'col':'deal'} )">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <a href="#" id="myBtn" class="link-dark">
                                        Customer_Name

                                    </a>


                                </h5>
                            </div>
                            <div class=" col-3">

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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>
                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;" onclick="modalManager({'approvalStatus':true,'col':'deal'} )">

                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <a href="#" id="myBtn" class="link-dark">
                                        Customer_Name

                                    </a>


                                </h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>

                <!-- Add a div to hold the modal -->
                <div id="modalContainer"></div>



            </div>
            <!----------------------------Quotation Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3 ">Quotation</h5>



                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;" onclick="modalManager({'col':'quotation','validity':true} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title"> <a href="#" id="myBtn" class="link-dark">
                                        Customer_Name

                                    </a></h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>
                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;" onclick="modalManager({'col':'quotation','validity':false} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title"> <a href="#" id="myBtn" class="link-dark">
                                        Customer_Name

                                    </a></h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>
                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;" onclick="modalManager({'col':'quotation','seekFeedback':true} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title"> <a href="#" id="myBtn" class="link-dark">
                                        FeedBack

                                    </a></h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>
                <!-- Add a div to hold the modal -->
                <div id="modalContainer"></div>


            </div>
            <!----------------------------Booking Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3  ">Booking</h5>


                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;" onclick="modalManager({'Role':'salesExecutive','col':'booking'} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <a href="#" id="myBtn" class="link-dark">
                                        Customer_Name

                                    </a>


                                </h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>

                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;" onclick="modalManager({'Role':'Acc_Manager','col':'booking'} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <a href="#" id="myBtn" class="link-dark">
                                        Transaction list Manager

                                    </a>


                                </h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>
                <div class="shadow p-1 mb-5 bg-white rounded mb-3 " style="width: 10 rem;" onclick="modalManager({'Role':'Acc_Executive','col':'booking'} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <a href="#" id="myBtn" class="link-dark">
                                        Transaction list Executive

                                    </a>


                                </h5>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>

            </div>
            <!----------------------------Item ready Column---------------- -->
            <div class="col-sm">
                <h5 class="rounded  p-2 bg-secondary text-white text-center mb-3 ">Item Ready</h5>



                <div class="shadow p-1 mb-5 bg-white rounded" style="width: 10 rem;" onclick="modalManager({'col':'itemReady','readyToDeliver':true} )">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">
                                    <h5 class="card-title"> <a href="#" id="myBtn" class="link-dark">
                                            FeedBack

                                        </a></h5>
                                </h5>
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
                        <a href="" class="card-link">Lead Details</a>
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
                        <a href="" class="card-link">Lead Details</a>
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
                        <a href="" class="card-link">Lead Details</a>
                    </div>
                </div>


            </div>






        </div>
    </div>













</body>

</html>