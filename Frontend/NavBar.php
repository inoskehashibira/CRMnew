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

    <title>Subaru CRM</title>


    <style>
        p {
            color: #ffffff;
            margin: 0;
            padding: 0;
            font-size: large;
        }

        nav {
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            transition: all 0.2s;
        }

        p:hover {
            color: red;
            cursor: pointer;
        }

        .custom-navbar {
            height: 50px;


        }

        @media only screen and (max-width: 600px) {
            .custom-navbar {
                height: auto;


            }
        }
    </style>

</head>


<body>


    <nav class=" navbar navbar-expand-lg navbar-light bg-info  custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand d-block " href="#"><img src="../Assets/png/subaru_Logo.png" alt="" height="70" ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  m-1 " aria-current="page" href="#">
                            <p>Sales Pipeline</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  m-1 " aria-current="page" href="#">
                            <p>Services Pipeline</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  m-1  " aria-current="page" href="#">
                            <p>Report</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active  m-1  " aria-current="page" href="#">
                            <p>Ownership Management</p>
                        </a>
                    </li>

                    <button class="btn btn-light shadow  mx-5 mt-1 " style="height:40px;font-size:small" type=" button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Create Lead
                    </button>

                    <!-- <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
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
                <ul class="navbar nav ">



                </ul>


                <ul class="navbar nav ml-auto">

                    <a class="nav-link" href="#"><img src="../Assets//png//avatar.png" width="50" height="50" /></a>

                </ul>
            </div>
        </div>
    </nav>


    <div class="d-flex justify-content-end">
        <div class="d-flex flex-column">
            <p class="m-0" style="color:black">Irfanul kalam Chowdhury</p>
            <p class="m-0" style="color:black">Executive, Sales</p>
        </div>
    </div>


    </div>









</body>

</html>