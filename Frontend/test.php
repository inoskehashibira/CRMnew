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
                    <select name="Tag" class="form-select" aria-label="Default select example">
                        <option selected>select Vehicle</option>
                        <option value="Facebook">Forester</option>
                        <option value="twitter">Subaru XV</option>
                        <option value="Instagram">Impreza</option>
                    </select>



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

        <!-- <div class="container border bg-light">

            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <div class="col-10">
                        <div class="mb-3">
                            <h3 style="color:#000">LOG IN</h3>
                            <h5> Email </h5>

                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <h5>Password</h5>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                    </div>
                </div>

            </div>

        </div> -->


        <!-- 
            <div class="row border h-100 d-flex align-items-center">
                <div class="col text-center">
                    <h1>Hello World!</h1>
                </div>
            </div> -->


        <!-- <div class="container h-100 mx-auto w-50 ">
            <div class="row  h-100   d-flex align-items-center">


                <div class="col   text-center p-5 ">
                    <h1 class="text-light mb-4">SUBARU BANGLADESH</h1>

                    <div class="container-fluid bg-light rounded ">
                        <form>

                            <div class="row justify-content-center  g-2">


                                <div class="col-10">
                                    <div class="mb-3">
                                        <h3 style="color:#000">LOG IN</h3>
                                        <h5> Email </h5>

                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                    </div>
                                    <div class="mb-3">
                                        <h5>Password</h5>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>

                                </div>

                            </div>



                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->



    </div>









</body>

</html>