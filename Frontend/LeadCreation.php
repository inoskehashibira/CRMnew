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

    <style>
        .containerIndex {
            background-image: url(Assets/jpg/subaru_login_bg.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100vw;
            margin: 10;
            opacity: 0.7;
        }

        .fontCol {
            color: #000;

        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>


</head>



<body>

    <div class="containerIndex">

        <nav class=" navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Subaru CRM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Sales Pipeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Services Pipeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Report</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="#">Ownership Management</a>
                        </li>

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
                    <ul class="navbar nav ml-auto">

                        <!-- <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div> -->
                        <a class="nav-link" href="#"><img src="assets/navBar/navbar_dp_icon.png" width="80" height="80" /></a>


                    </ul>
                </div>
            </div>
        </nav>

        <div class="col-md-6 m-5  rounded shadow p-2 mx-auto">
            <div class="container mt-5">
                <h1 class="text-center">Lead Generation</h1>

                <form action="../Backend/Created_Lead.php" method="post" class="row g-3">



                    <div class="col-md-6">
                        <label htmlFor="firstName" class="form-label">
                            Customer Name
                        </label>
                        <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                    </div>

                    <div class="col-md-6">
                        <label htmlFor="firstName" class="form-label">
                            Mobile
                        </label>
                        <input type="text" class="form-control" name="Organization" id="Organization" required></input>
                    </div>

                    <div class="col-md-6 ">
                        <label htmlFor="emailinfo" class="form-label">
                            E-mail
                        </label>
                        <input type="email" class="form-control" id="emailinfo" name="Customer_Email" required></input>
                    </div>

                    <div class="col-md-6">
                        <label htmlFor="firstName" class="form-label">
                            Location
                        </label>
                        <input type="text" class="form-control" name="Organization" id="Organization" required></input>
                    </div>


                    <label htmlFor="firstName" class="form-label ">
                        Interested Vehicle:
                    </label>
                    <!-- <select name="Tag" class="form-select" aria-label="Default select example">
                        <option selected>select Vehicle</option>
                        <option value="Facebook">Forester</option>
                        <option value="twitter">Subaru XV</option>
                        <option value="Instagram">Impreza</option>
                    </select> -->

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Forester
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Subaru XV
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Impreza
                        </label>
                    </div>

                    <div class="row  justify-content-center align-items-center g-2">
                        <div class="col-auto my-5">
                            <button class="btn btn-primary" type="submit" name="submit">
                                Create Lead
                                <a href="../index.php"></a>
                            </button>
                        </div>
                    </div>

                </form>



            </div>
        </div>









    </div>









</body>

</html>