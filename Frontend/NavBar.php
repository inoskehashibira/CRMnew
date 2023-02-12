<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bundle min -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Css/style2.css">
    <title>Subaru CRM</title>
</head>


<body>

    <!-- ------------------nav bar dextop view------------- -->

    <nav class=" navbar navbar-expand-lg navbar-light bg-info  custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand d-block " href="#"><img src="../Assets/png/subaru_Logo.png" alt="" height="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  m-1 " aria-current="page" href="#">
                            <p class="text-white m-0 p-0">Sales Pipeline</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  m-1 " aria-current="page" href="#">
                            <p class="text-white m-0 p-0">Services Pipeline</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  m-1  " aria-current="page" href="#">
                            <p class="text-white m-0 p-0">Report</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active  m-1  " aria-current="page" href="#">
                            <p class="text-white m-0 p-0">Ownership Management</p>
                        </a>
                    </li>

                    <!-- <button class="btn btn-light shadow btn-sm  " type=" button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Create Lead
                    </button> -->
                </ul>
                <ul class="navbar nav ">
                    <a href="LeadCreation.php"><button class="btn btn-light shadow btn-sm me-5 text-darkblue">Create Lead</button></a>
                </ul>

                <ul class="navbar nav ml-auto">
                    <a class="nav-link" href="#"><img src="../Assets//png//avatar.png" width="50" height="50" /></a>
                </ul>
            </div>
        </div>
    </nav>



    <div class="m-2 fs-1 text-darkblue ps-2 pe-2 sidebar-open">
        <i class="fa-solid fa-bars text-center"></i>
    </div>


    <!-- ------------------Sidebar------------- -->

    <div class="bg-light border p-3 sidebar" id="sidebar">
        <div class="text-end mb-1" id="sidebar-close">
            <i class="fa-solid fa-square-xmark text-darkblue fs-2"></i>
        </div>
        <div class="text-center">
            <a href="">
                <img src="../Assets/png/subaru_Logo.png" alt="" height="70">
            </a>
        </div>
        <hr>
        <div class="text-center">
            <a href="LeadCreation.php"><button class="btn btn-darkblue shadow btn-sm">Create Lead</button></a>
        </div>
        <hr>
        <div class="d-flex flex-column">
            <a href="" class="text-darkblue font-weight-normal m-2" style="text-decoration: none;">Sales Pipeline</a>
            <a href="" class="text-darkblue font-weight-normal m-2" style="text-decoration: none;">service Pipeline</a>
            <a href="" class="text-darkblue font-weight-normal m-2" style="text-decoration: none;">Report</a>
            <a href="" class="text-darkblue font-weight-normal m-2" style="text-decoration: none;">Ownership Management</a>

        </div>
    </div>

    <!-- ------------------Text Headings------------- -->

    <div class="me-2" style="text-align: end;">
        <p class="m-0 text-dark"><small>Irfanul kalam Chowdhury</small></p>
        <p class="mb-2 text-dark"><small>Executive, Sales</small></p>
    </div>


    </div>

    <script>
        $('.sidebar-open').on('click', function() {
            document.getElementById('sidebar').style.display = "block";
        });
        $('#sidebar-close').on('click', function() {
            document.getElementById('sidebar').style.display = "none";
        });
    </script>
</body>

</html>