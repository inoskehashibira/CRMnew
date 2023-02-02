<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Template</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg mb-0 navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="../assets/navBar/Subaru_logo.svg.png" width="" height="100" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
            <span class=""></span>
            <span class=""></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between " id="#navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <button type="button" class="btn btn-outline-secondary">
                            <h5>Sales Pipeline</h5>
                        </button>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <button type="button" class="btn btn-outline-secondary">
                            <h5>Services Pipeline</h5>
                        </button>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <button type="button" class="btn btn-outline-secondary">
                            <h5>Report</h5>
                        </button>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <button type="button" class="btn btn-outline-secondary">
                            <h5>Ownership Management</h5>
                        </button>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>


            </ul>
            <ul class="navbar nav nav-item dropdown ml-auto">




                <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/navBar/navbar_dp_icon.png" width="80" height="80" /></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class=" dropdown-item" href="#">
                        <div class="card" style="height: 100%; width: 100%;">
                            <img class="card-img-top" src="../assets/navBar/navbar_dp_icon.png" alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">Tisdtle</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>

            </ul>

        </div>
    </nav>




    <div class="container-fluid mt-1">
        <div class="row  g-2  ">


            <div class="col ml-4 " align="center">

                <h5> Lead Information</h5>
                <?php
                include "../Backend/db_con.php";
                $id = $_GET['leadID'];
                $sql = "SELECT * FROM `leads` WHERE `Lead_ID` =$id";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Lead ID</th>
                                <td><?php echo $row['Lead_ID'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Customer Name</th>
                                <td><?php echo $row['Customer_Name'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?php echo $row['Customer_Email'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Interested Model</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row">Lead Started</th>
                                <td><?php echo $row['Lead_Creation_Time'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Created By</th>
                                <td><?php echo $row['Lead_CreatedBy'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Referred By</th>
                                <td>Null</td>
                            </tr>


                        </tbody>
                    </table>
                <?php
                }
                ?>
            </div>

            <!-- <div class="col-4" align="center">
                <h3>Lead Information</h3>
                <div class="row ">
                    <div class="col " align="left">

                        <h5 class="bg-light">Lead ID :</h5>
                        <h5>Customer Name:</h5>
                        <h5 class="bg-light">Mobile Number:</h5>
                        <h5>Interested Model:</h5>
                        <h5 class="bg-light">Lead Started:</h5>
                        <h5>Created by:</h5>
                        <h5 class="bg-light">Referenced By:</h5>
                    </div>
                    <div class="col" align="left">
                        <h5 class="bg-light">1101</h5>
                        <h5>Jamil</h5>
                        <h5 class="bg-light">01521534658</h5>
                        <h5>subaru v15</h5>
                        <h5 class="bg-light">5th jan</h5>
                        <h5>Created by:</h5>
                        <h5 class="bg-light">sales person</h5>
                    </div>
                </div>


            </div> -->



            <div class="col border mr-4">
                <div>


                    <div class="row  mt-5 ">
                        <div class="col-2  " align="right">

                            <div class="dropdown mt-5">
                                <button class="btn btn-secondary dropdown-toggle mt-5 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Activity Type
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Contact</a>
                                    <a class="dropdown-item" href="#">Meeting</a>
                                    <a class="dropdown-item" href="#">Question</a>
                                </div>
                            </div>


                        </div>
                        <div class="col-7  mt-4">
                            <div class="input-group mt-4">

                                <textarea class="form-control mt-3" id="exampleFormControlTextarea1" cols="5" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-3  mt-3">
                            <button type="button" class="btn btn-primary btn-lg mt-5">Add Activity</button>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="container-fluid mt-3 mx-2">
            <div class="card text-start shadow">
                <div class="card-body">
                    <h4 class="card-title text-center">Lead Activity</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>